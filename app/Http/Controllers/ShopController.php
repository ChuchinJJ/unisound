<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Color;
use App\Models\Valoracion;

class ShopController extends Controller
{

    public function index(Request $request)
    {
        $nombre = $request->input('nombre', '');
        $min_precio = $request->input('min_precio', '1');
        $max_precio = $request->input('max_precio', '900000');
        $order = ["id_producto", "ASC"];
        if ($request->has('order')) {
            $filtro = $request->input('order');
            if($filtro =="nombre"){
                $order = ["nombre", "ASC"];
            }else if($filtro =="nombre-desc"){
                $order = ["nombre", "DESC"];
            }else if($filtro == "precio"){
                $order = ["precio", "DESC"];
            }else if($filtro == "precio-desc"){
                $order = ["precio", "ASC"];
            }else if($filtro == "rating"){
                $order = ["rating", "DESC"];
            }else if($filtro == "rating-desc"){
                $order = ["rating", "ASC"];
            }
        }
        
        if($order[0] == "rating"){
            $valoraciones  = Valoracion::selectRaw('avg(puntuacion) as valoracion, id_producto')
                ->groupBy('id_producto')
                ->orderBy("valoracion", $order[1]);
            $productos = Producto::join('colores','colores.id_producto', '=', 'productos.id_producto')
                ->leftJoinSub($valoraciones, 'valoraciones', function ($join){
                    $join->on('productos.id_producto', '=', 'valoraciones.id_producto');
                })
                ->select('productos.id_producto', 'nombre', 'descripcion_general', 'descripcion_detallada', 
                    'id_categoria', 'imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5', 'valoracion')
                ->where('nombre', 'like', '%'.$nombre.'%')
                ->where('precio', '>', $min_precio)
                ->where('precio', '<', $max_precio)
                ->orderBy("valoracion", $order[1])
                ->distinct(['productos.id_producto'])
                ->paginate(10);
        }else{
            $productos = Producto::join('colores','colores.id_producto', '=', 'productos.id_producto')
                ->select('productos.id_producto', 'nombre', 'descripcion_general', 'descripcion_detallada', 
                    'id_categoria', 'imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5')
                ->where('nombre', 'like', '%'.$nombre.'%')
                ->where('precio', '>', $min_precio)
                ->where('precio', '<', $max_precio)
                ->orderBy($order[0], $order[1])
                ->distinct(['productos.id_producto'])
                ->paginate(10);
        }
        $colores = Color::orderBy('precio','asc')->get();
        $valoracion  = Valoracion::selectRaw('avg(puntuacion) as valoracion, id_producto')
                ->groupBy('id_producto')->get();
        $request->flash();
        return view('pages.shop')->with([
            'productos' => $productos, 
            'colores' => $colores, 
            'valoraciones' => $valoracion
        ]);
    }

    public function show(Request $request, $id)
    {   
        $min_precio = $request->input('min_precio', '1');
        $max_precio = $request->input('max_precio', '900000');
        $order = ["id_producto", "ASC"];
        if ($request->has('order')) {
            $filtro = $request->input('order');
            if($filtro =="nombre"){
                $order = ["nombre", "ASC"];
            }else if($filtro =="nombre-desc"){
                $order = ["nombre", "DESC"];
            }else if($filtro == "precio"){
                $order = ["precio", "DESC"];
            }else if($filtro == "precio-desc"){
                $order = ["precio", "ASC"];
            }else if($filtro == "rating"){
                $order = ["rating", "DESC"];
            }else if($filtro == "rating-desc"){
                $order = ["rating", "ASC"];
            }
        }
        
        if($order[0] == "rating"){
            $valoraciones  = Valoracion::selectRaw('avg(puntuacion) as valoracion, id_producto')
                ->groupBy('id_producto')
                ->orderBy("valoracion", $order[1]);
            $productos = Producto::join('colores','colores.id_producto', '=', 'productos.id_producto')
                ->leftJoinSub($valoraciones, 'valoraciones', function ($join){
                    $join->on('productos.id_producto', '=', 'valoraciones.id_producto');
                })
                ->select('productos.id_producto', 'nombre', 'descripcion_general', 'descripcion_detallada', 
                    'id_categoria', 'imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5', 'valoracion')
                ->where('precio', '>', $min_precio)
                ->where('precio', '<', $max_precio)
                ->where('id_categoria', $id)
                ->orderBy("valoracion", $order[1])
                ->distinct(['productos.id_producto'])
                ->paginate(10);
        }else{
            $productos = Producto::join('colores','colores.id_producto', '=', 'productos.id_producto')
                ->select('productos.id_producto', 'nombre', 'descripcion_general', 'descripcion_detallada', 
                    'id_categoria', 'imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5')
                ->where('precio', '>', $min_precio)
                ->where('precio', '<', $max_precio)
                ->where('id_categoria', $id)
                ->orderBy($order[0], $order[1])
                ->distinct(['productos.id_producto'])
                ->paginate(10);
        }
        $colores = Color::orderBy('precio','asc')->get();
        $valoracion  = Valoracion::selectRaw('avg(puntuacion) as valoracion, id_producto')
                ->groupBy('id_producto')->get();
        $request->flash();
        return view('pages.shop')->with([
            'productos' => $productos, 
            'colores' => $colores, 
            'valoraciones' => $valoracion
        ]);
    }
}
