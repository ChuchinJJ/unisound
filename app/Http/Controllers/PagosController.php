<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Producto;
use App\Models\Color;
use Conekta\Conekta;
use Carbon\Carbon;
use Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class PagosController extends Controller
{
    public function __construct(){
        $this->middleware(function ($request, $next) {
            if (Auth::user()->tipo == 1) {
                abort(404);
            }
            
            Conekta::setApiKey(env("CONEKTA_SECRET_KEY"));
            Conekta::setApiVersion(env("CONEKTA_API_VERSION"));

            return $next($request);
        })->except('webhook');
    }

    // Presentacion de formulario de pagos con tarjeta debito/credito
    public function card($id_venta){
        $venta = Venta::find($id_venta);
        if ($venta->pagado == 1 || Auth::user()->email != $venta->id_cliente) {
            abort(404);
        }

        try {
            $token = \Conekta\Token::create([
                "checkout" => [
                    "returns_control_on" => "Token"
                ]
            ]);

            if(isset($token->checkout)){
                return view("pages.paymentCard")->with([
                    "token" => $token->checkout->id,
                    "id_venta" => $id_venta
                ]);
            }
        } catch (\Conekta\ParameterValidationError $e){
            return view("pages.paymentCard")->with([
                "paymentError" => "Lo sentimos ocurrió un error inesperado."
            ]);
        } catch (\Conekta\Handler $e){
            return view("pages.paymentCard")->with([
                "paymentError" => "Lo sentimos ocurrió un error inesperado."
            ]);
        }
    }

    // Manejo de pagos con tarjeta debito/credito
    public function paymentCard($id_venta, Request $request){
        $venta = Venta::find($id_venta);
        $detalle_venta = DetalleVenta::where("id_venta", $id_venta)->get();
        $cliente = Cliente::find(Auth::user()->email);
        
        try {
            $customer = \Conekta\Customer::create([
                'name'  => $cliente->nombre." ".$cliente->apellidos,
                'phone' => $cliente->telefono,
                'email' => $cliente->email,
                "payment_sources" => [
                    [
                        "type" => "card",
                        "token_id" => $request->id_token
                    ]
                ]
            ]);

            if(isset($customer->id)){
                $valid_order = self::getValidOrder("card", $venta, $detalle_venta, $cliente, $customer->id);
                $order = \Conekta\Order::create($valid_order);
                $date = Carbon::now();
                if($order->charges[0]->payment_method->type == "credit"){
                    $tipo_tarjeta = "crédito ";
                }else{
                    $tipo_tarjeta = "débito ";
                }
                $info_venta = "";
                if($venta->detalles != null){
                    $info_venta = $venta->detalles."\n";
                }
                $venta->pagado = 1;
                $venta->orden_conekta = $order->charges[0]->order_id;
                $venta->detalles = $info_venta."Pagado con tarjeta de ".
                    $tipo_tarjeta.$order->charges[0]->payment_method->brand." el ".
                    $date->format('d/m/Y h:i A').".";
                $venta->save();

                $data = array(
                    'email' => $cliente->email,
                    'cliente' => $cliente,
                    'venta' => $venta,
                    'detalles' => $detalle_venta,
                    "order" => $order
                );

                Mail::send('emails.paymentComplete', $data, function($message) use ($data){
                    $message->from(env('MAIL_FROM_ADDRESS'), 'Unisound');
                    $message->to($data['email']);
                    $message->subject('¡Su pago ha sido confirmado!');
                });

                return response()->json($order, 200);
            }
            return response()->json("Algo salio mal", 400);
        } catch (\Conekta\ParameterValidationError $e){
            return response()->json($e->message, 500);
        } catch (\Conekta\Handler $e){
            return response()->json($e->message, 500);
        }catch(Exception $e){
            return response()->json($e, 500);
        }
    }

    // Manejo de pago para depositos
    public function cash($id_venta){
        $venta = Venta::find($id_venta);
        $detalle_venta = DetalleVenta::where("id_venta", $id_venta)->get();
        $cliente = Cliente::find(Auth::user()->email);
        $valid_order = self::getValidOrder("oxxo_cash", $venta, $detalle_venta, $cliente);

        if ($venta->pagado == 1 || $cliente->email != $venta->id_cliente) {
            abort(404);
        }

        try {
            $order = \Conekta\Order::create($valid_order);
            if(isset($order->id)){
                $date = Carbon::now();
                $info_venta = "";
                if($venta->detalles != null){
                    $info_venta = $venta->detalles."\n";
                }
                $barcode_url =  $order->charges[0]->payment_method->barcode_url;
                $expiracion =  Carbon::parse($order->charges[0]->payment_method->expires_at)->format('d/m/Y');
                $venta->orden_conekta = $order->charges[0]->order_id;
                $venta->detalles = $info_venta."Se generó referencia de pago con efectivo \"".$order->charges[0]->payment_method->reference."\" para ".
                    $order->charges[0]->payment_method->store_name ." el ".$date->format('d/m/Y h:i A').
                    ", expira el: ".$expiracion.".";
                $venta->save();

                $data = array(
                    'email' => $cliente->email,
                    'payment' => json_decode($order),
                    'cliente' => $cliente
                );

                Mail::send('emails.paymentStub', $data, function($message) use ($data){
                    $message->from(env('MAIL_FROM_ADDRESS'), 'Unisound');
                    $message->to($data['email']);
                    $message->subject('Tu referencia esta lista ¡Realiza tu pago!');
                });

                return redirect()->route("clienteDetalle", ['id' => $venta->id_venta])
                    ->with("payment", json_decode($order));
            }
        } catch (\Conekta\ParameterValidationError $e){
            if($e->code == "conekta.errors.parameter_validation.combo.order.currency_type.oxxo.maximum"){
                $error = $e->message." Por favor intente con otro medio de pago";
            }else{
                $error = $e->message;
            }
            return redirect()->route("clienteDetalle", ['id' => $venta->id_venta])
                ->with("paymentError", $error);
        } catch (\Conekta\Handler $e){
            return redirect()->route("clienteDetalle", ['id' => $venta->id_venta])
                ->with("paymentError", $e->message);
        }
    }

    // Manejo de pagos para tranferencias SPEI
    public function transfer($id_venta){
        $venta = Venta::find($id_venta);
        $detalle_venta = DetalleVenta::where("id_venta", $id_venta)->get();
        $colores = Color::all();
        $productos = Producto::all();
        $cliente = Cliente::find(Auth::user()->email);
        $valid_order = self::getValidOrder("spei", $venta, $detalle_venta, $cliente);

        if ($venta->pagado == 1 || $cliente->email != $venta->id_cliente) {
            abort(404);
        }

        try {
            $order = \Conekta\Order::create($valid_order);
            if(isset($order->id)){
                $date = Carbon::now();
                $info_venta = "";
                if($venta->detalles != null){
                    $info_venta = $venta->detalles."\n";
                }
                $expiracion =  Carbon::parse($order->charges[0]->payment_method->expires_at)->format('d/m/Y');
                $venta->orden_conekta = $order->charges[0]->order_id;
                $venta->detalles = $info_venta."Se generó clave de transferencia bancaria \"".$order->charges[0]->payment_method->clabe."\" en SPEI el ".
                    $date->format('d/m/Y h:i A').", expira el: ".$expiracion.".";
                $venta->save();

                $data = array(
                    'email' => $cliente->email,
                    'payment' => json_decode($order),
                    'cliente' => $cliente
                );

                Mail::send('emails.paymentStub', $data, function($message) use ($data){
                    $message->from(env('MAIL_FROM_ADDRESS'), 'Unisound');
                    $message->to($data['email']);
                    $message->subject('Tu referencia esta lista ¡Realiza tu transferencia!');
                });

                return redirect()->route("clienteDetalle", ['id' => $venta->id_venta])
                    ->with("payment", json_decode($order));
            }
        } catch (\Conekta\ParameterValidationError $e){
            return redirect()->route("clienteDetalle", ['id' => $venta->id_venta])
                ->with("paymentError", $e->message);
        } catch (\Conekta\Handler $e){
            return redirect()->route("clienteDetalle", ['id' => $venta->id_venta])
                ->with("paymentError", $e->message);
        }
    }

    // Webhook para notificar pagos completados
    public function webhook(Request $request){
        $order = @file_get_contents("php://input");
        $order = json_decode($order);
        $order_id = isset($order->data->object->order_id) ? $order->data->object->order_id : null;
        $order_status = isset($order->data->object->status) ? $order->data->object->status : null;

        if($order_id && $order_status && $order_status == "paid"){
            $venta = Venta::firstWhere("orden_conekta", $order_id);
            if($venta && $venta->pagado == 0){
                $cliente = Cliente::find($venta->id_cliente);
                $info_venta = "";
                $date = Carbon::now();
                if($venta->detalles != null){
                    $info_venta = $venta->detalles."\n";
                }
                $venta->detalles = $info_venta."Se confirmó el pago el ".
                    $date->format('d/m/Y h:i A').".";
                $venta->pagado = 1;
                $venta->save();
                $detalle_venta = DetalleVenta::where("id_venta", $venta->id_venta)->get();
                
                $data = array(
                    'email' => $cliente->email,
                    'cliente' => $cliente,
                    'venta' => $venta,
                    'detalles' => $detalle_venta,
                    "order" => $order->data->object
                );

                Mail::send('emails.paymentComplete', $data, function($message) use ($data){
                    $message->from(env('MAIL_FROM_ADDRESS'), 'Unisound');
                    $message->to($data['email']);
                    $message->subject('¡Su pago ha sido confirmado!');
                });

                return response()->json(["Mensaje:" => "Orden actualizada"]);
            }
        }
        return response()->json(["Mensaje:" => "No hay ordenes por procesar"]);
    }

    // Imprimir recibo en PDF
    public function imprimirPago(Request $request){
        $data = [json_decode($request->payment)];
        $pdf = Pdf::loadView('pdf.paymentStub', ["payment" => $data[0]]);
        return $pdf->stream('Referencia de pago Unisound.pdf');
    }

    private function getValidOrder($payment_type, $venta, $detalle_venta, $cliente, $customer_id = ""){

        foreach($detalle_venta as $item => $detalle){
            $line_items[$item] = [
                "name" => $detalle->producto,
                "description" => $detalle->producto.". Id de color = ".$detalle->id_color,
                "unit_price" => round($detalle->precio * 100),
                "quantity" => $detalle->cantidad,
                "sku" => strval($detalle->id_detalleVenta)
            ];
        }

        if($customer_id != ""){
            $payment_method = [
                "type" => "default"
            ];

            $customer = [
                "customer_id" => $customer_id 
            ];
        }else{
            $payment_method = [
                "type" => $payment_type
            ];

            $customer = [
                "name" => $cliente->nombre." ".$cliente->apellidos,
                "phone" => $cliente->telefono,
                "email" => $cliente->email,
            ];
        }

        $valid_order = [
            "line_items" => $line_items,
            "currency" => "mxn",
            "charges"  => [
                [
                    "payment_method" => $payment_method,
                    "amount" => $venta->total * 100,
                ]
            ],
            "currency" => "mxn",
            "customer_info" => $customer
        ];

        return $valid_order;
    }
}
