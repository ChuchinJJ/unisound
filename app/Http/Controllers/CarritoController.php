<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Producto;
use App\Models\Color;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;
use App\Models\Notificacion;
use App\Models\Cupon;
use App\Models\DetalleCupon;
use DateTime;
use Mail;

class CarritoController extends Controller
{
    public function cart(){
        return view('pages.cart');
    }

    public function add(Request $request){
        $producto = Producto::find($request->product_id);
        $color = Color::find($request->color);
        $nombre = $producto->nombre;
        if($color->color != 'Default' ){
            $nombre = $nombre." - ".$color->color;
        }
        $cupon = "";
        $descuento = "";
        $fechaActual = date('Y-m-d');
        $cuponVigente = Cupon::where('deleted_at', null)
            ->where('fecha_inicio', '<=', $fechaActual)
            ->where('fecha_fin', '>=', $fechaActual)
            ->first();
        foreach(Cart::getContent() as $item){
            if(count($item->conditions) > 0){
                $cupon = $item->conditions[0]->getName();
                $descuento = $item->conditions[0]->getValue();
            }
        }

        if($cuponVigente->nombre == $cupon){
            $productos = DetalleCupon::where('id_cupon', $cuponVigente->id_cupon)->get();
            $productoDescuento = $productos->where('id_producto', $producto->id_producto);
                if($productoDescuento->isNotEmpty()){
                    $saleCondition = new \Darryldecode\Cart\CartCondition(array(
                        'name' => $cuponVigente->nombre,
                        'type' => 'coupon',
                        'value' => '-'.$cuponVigente->descuento.'%',
                    ));
                    Cart::add(
                        $color->id_color, 
                        $nombre,
                        $color->precio,
                        $request->quantity,
                        array(
                            "urlimg" => $producto->imagen1,
                            "color" => $color->color,
                            "id_producto" => $producto->id_producto,
                        ),
                        [$saleCondition]
                    );
                }else{
                    Cart::add(
                        $color->id_color, 
                        $nombre,
                        $color->precio,
                        $request->quantity,
                        array(
                            "urlimg" => $producto->imagen1,
                            "color" => $color->color,
                            "id_producto" => $producto->id_producto,
                        )   
                    );
                }
        }else{
            Cart::add(
                $color->id_color, 
                $nombre,
                $color->precio,
                $request->quantity,
                array(
                    "urlimg" => $producto->imagen1,
                    "color" => $color->color,
                    "id_producto" => $producto->id_producto,
                )   
            );
        }

        return back()->with('success',"$producto->nombre se ha agregado con éxito al carrito");
   
    }

    public function removeitem($id) {
        Cart::remove([
        'id' => $id,
        ]);
        return back()->with('success',"El producto se ha eliminado con éxito de su carrito.");
    }

    public function edit(Request $request){
        $count = count($request->input('quantity'));
        for($i=0; $i<$count; $i++){
            $producto = Color::find($request->input('cart_id')[$i]);
            $cantidad = $request->input('quantity')[$i];
            $id = $request->input('cart_id')[$i];
            if($producto->cantidad < $cantidad){
                return back()->with('success',"La cantidad seleccionada para ".Cart::get($id)->name." no está disponible.");        
            }
            Cart::update($id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $cantidad
                )
            ));
        }
        return back()->with('success',"Se ha actualizado su carrito.");
    }

    public function cupon(Request $request){
        $codigo = $request->input('cupon');
        $fechaActual = date('Y-m-d');
        $cuponVigente = Cupon::where('deleted_at', null)
            ->where('fecha_inicio', '<=', $fechaActual)
            ->where('fecha_fin', '>=', $fechaActual)
            ->first();
        if($cuponVigente == null){
            return back()->with('success',"No hay cupones vigentes.");
        }

        if($cuponVigente->codigo == $codigo){
            $productos = DetalleCupon::where('id_cupon', $cuponVigente->id_cupon)->get();
            $count = 0;
            foreach(Cart::getContent() as $item){
                $productoDescuento = $productos->where('id_producto', $item->attributes['id_producto']);
                if($productoDescuento->isNotEmpty()){
                    $count ++;
                    $saleCondition = new \Darryldecode\Cart\CartCondition(array(
                        'name' => $cuponVigente->nombre,
                        'type' => 'coupon',
                        'value' => '-'.$cuponVigente->descuento.'%',
                    ));
                    Cart::addItemCondition($item->id, $saleCondition);
                }
            }
            if($count > 0){
                return back()->with('success',"Cupón agregado con exito.");
            }else{
                return back()->with('success',"Ningún producto seleccionado es válido para el cupón.");
            }
        }else{
            return back()->with('success',"El cupón no es válido.");
        }
    }

    public function checkout(){
        if (count(Cart::getContent())){
            $cliente = Cliente::where('id_usuario', Auth::user()->id_usuario)->first();
            $subtotal = 0;
            foreach(Cart::getContent() as $item){
                if(count($item->conditions) > 0){
                    $subtotal = $subtotal + $item->getPriceSum();
                }
            }
            $venta = new Venta();
            $venta->fecha = new DateTime();
            $venta->total = Cart::getTotal();
            $venta->descuento = $subtotal-Cart::getTotal();
            $venta->id_cliente = $cliente->email;
            $venta->save();

            $notificacion = new Notificacion();
            $notificacion->id_venta = $venta->id_venta;
            $notificacion->cliente = $cliente->nombre." ".$cliente->apellidos;
            $notificacion->fecha = new DateTime();
            $notificacion->save();

            foreach(Cart::getContent() as $item){
                $detalle_venta = new DetalleVenta;
                $detalle_venta->producto = $item->name;
                $detalle_venta->cantidad = $item->quantity;
                $detalle_venta->precio = $item->getPriceWithConditions();
                $detalle_venta->id_color = $item->id;
                $detalle_venta->id_venta = $venta->id_venta;
                $detalle_venta->save();
            }

            $detalles = DetalleVenta::where('id_venta', $venta->id_venta)->get();
            Cart::clear();
            $data = array(
                'email' => $cliente->email,
                'venta' => $venta,
                'detalles' => $detalles, 
                'cliente' => $cliente
            );         
            Mail::send('emails.checkout', $data, function($message) use ($data){
                $message->from('noreply@unisound.com.mx', 'Unisound');
                $message->to($data['email']);
                $message->subject('Su pedido fue procesado con éxito');
            });

            return view('pages.checkout')->with([
                'success' => 'Su pedido fue procesado con éxito',
                'venta' => $venta,
                'detalles' => $detalles, 
                'cliente' => $cliente
            ]);
        }else{
            return redirect('/');
        }
    }
}
