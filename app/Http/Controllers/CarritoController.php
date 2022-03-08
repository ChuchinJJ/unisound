<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Producto;
use App\Models\Color;

class CarritoController extends Controller
{
    public function cart(){
        return view('pages.cart');
    }

    public function checkout(){
        return view('pages.checkout');
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
}
