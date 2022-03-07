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
            $producto->id_producto, 
            $producto->nombre,
            $color->precio,
            $request->quantity,
            array(
                "urlimg" => $producto->imagen1,
                "color" => $color->color,
                "id_color" => $color->id_color,
            )
           
        );
        return back()->with('success',"$producto->nombre ¡se ha agregado con éxito al carrito!");
   
    }

    public function removeitem($id) {
        Cart::remove([
        'id' => $id,
        ]);
        return back()->with('success',"Producto eliminado con éxito de su carrito.");
    }

    public function clear(){
        Cart::clear();
        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");
    }
}
