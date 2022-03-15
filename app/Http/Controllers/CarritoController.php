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

        Cart::add(
            $color->id_color, 
            $producto->nombre,
            $color->precio,
            $request->quantity,
            array(
                "urlimg" => $producto->imagen1,
                "color" => $color->color,
                "id_color" => $color->id_color,
            )
           
        );
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

    public function checkout(){
        if (count(Cart::getContent())){
            $cliente = Cliente::where('id_usuario', Auth::user()->id_usuario)->first();
            $venta = new Venta();
            $venta->fecha = new DateTime();
            $venta->total = Cart::getTotal();
            $venta->descuento = 0;
            $venta->id_cliente = $cliente->email;
            $venta->save();

            foreach(Cart::getContent() as $item){
                $nombre = $item->name;
                if($item->attributes['color'] != 'Default' ){
                    $nombre = $nombre." - ".$item->attributes['color'];
                }

                $detalle_venta = new DetalleVenta;
                $detalle_venta->producto = $nombre;
                $detalle_venta->cantidad = $item->quantity;
                $detalle_venta->precio = $item->price;
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
