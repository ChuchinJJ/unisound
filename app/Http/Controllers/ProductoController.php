<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Color;
use App\Models\Valoracion;
use Illuminate\Support\Facades\Storage;
use DateTime;

class ProductoController extends Controller
{
    
    public function index(Request $request)
    {   
        $nombre = $request->input('nombre', '');
        $idCategoria = $request->input('categoria', '');
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

        if($idCategoria == ""){
            $categoria=["!=","0"];
        }else{
            $categoria=["=",$idCategoria];
        }
        
        if($order[0] == "rating"){
            $valoraciones = Valoracion::selectRaw('avg(puntuacion) as valoracion, id_producto')
                ->groupBy('id_producto')
                ->orderBy("valoracion", $order[1]);
            $productos = Producto::leftJoinSub($valoraciones, 'valoraciones', function ($join){
                    $join->on('productos.id_producto', '=', 'valoraciones.id_producto');
                })
                ->select('productos.id_producto', 'nombre', 'descripcion_general', 'descripcion_detallada', 
                    'id_categoria', 'imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5', 'valoracion', 'productos.deleted_at')
                ->where('nombre', 'like', '%'.$nombre.'%')
                ->where('id_categoria', $categoria[0], $categoria[1])
                ->orderBy("valoracion", $order[1])
                ->distinct(['productos.id_producto'])
                ->paginate(10);
        }else{
            $productos = Producto::join('colores','colores.id_producto', '=', 'productos.id_producto')
                ->select('productos.id_producto', 'nombre', 'descripcion_general', 'descripcion_detallada', 
                    'id_categoria', 'imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5', 'productos.deleted_at')
                ->where('nombre', 'like', '%'.$nombre.'%')
                ->where('id_categoria', $categoria[0], $categoria[1])
                ->orderBy($order[0], $order[1])
                ->distinct(['productos.id_producto'])
                ->paginate(10);
        }
        $colores = Color::where('deleted_at', null)->orderBy('precio','asc')->get();
        $valoracion  = Valoracion::selectRaw('avg(puntuacion) as valoracion, id_producto')
            ->groupBy('id_producto')->get();
        $request->flash();
        return view('admin.productos')->with([
            'productos'=>$productos,
            'colores'=>$colores,
            'valoraciones' => $valoracion
        ]);
    }
    
    public function showShop($id)
    {
        $producto = Producto::find($id);
        $categoria = Producto::getCategoria($producto->id_categoria);
        $colores = Color::where('deleted_at', null)->orderBy('precio','asc')->where('id_producto', $producto->id_producto)->get();
        $valoraciones = Valoracion::join('usuarios','usuarios.id_usuario', '=', 'valoraciones.id_usuario')
        ->select('id_valoracion', 'comentario', 'puntuacion', 'fecha', 'email')
        ->where('id_producto', $producto->id_producto)->get();
        return view('pages.product')->with([
            'producto'=>$producto, 
            'colores' => $colores, 
            'categoria' => $categoria,
            'valoraciones' => $valoraciones
        ]);
    }

    public function indexAddProducto(Request $request)
    {
        return view('admin.addProduct');
    }

    public function addProducto(Request $request)
    {   
        $nombreImagenes = [];
        $count = 0;
        if( $request->hasFile('file') ) {
            $files = $request->file('file');
            foreach($files as $file){
                //Nombre de archivo con extension
                $fileNameWithExt = $file->getClientOriginalName();
                //Nombre de archivo sin extension
                $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
                //Solo extension
                $extension = $file->getClientOriginalExtension();
                //Nombre de archivo a guardar
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                //Subir archivo al servidor
                $path = $file->storeAs('public/img/products/', $fileNameToStore);
                $nombreImagenes[$count] = $fileNameToStore;
                $count++;
            }
        } else {
            $nombreImagenes[0] = 'noimage.jpg';
        }

        $producto = new Producto;
        $producto->nombre = $request->input('nombre');
        $producto->descripcion_general = $request->input('desc_general');
        $producto->descripcion_detallada = $request->input('desc_detallada');
        $producto->id_categoria = $request->input('categoria');
        for($i=0; $i<$count; $i++){
            if($i==0){
                $producto->imagen1 = $nombreImagenes[$i];
            }else if($i==1){
                $producto->imagen2 = $nombreImagenes[$i];
            }else if($i==2){
                $producto->imagen3 = $nombreImagenes[$i];
            }else if($i==3){
                $producto->imagen4 = $nombreImagenes[$i];
            }else if($i==4){
                $producto->imagen5 = $nombreImagenes[$i];
            }
        }
        $producto->save();

        $countColores = count($request->input('color'));
        for($i=0; $i<$countColores; $i++){
            $color = new Color();
            $color->color = $request->input('color')[$i];
            $color->precio = $request->input('precio')[$i];
            $color->cantidad = $request->input('cantidad')[$i];
            $color->rgb = $request->input('rgb')[$i];
            $color->id_producto = $producto->id_producto;
            $color->save();
        }  
    }

    public function complete(){
        return redirect('/admin/productos')->with('success', 'El Producto ha sido agregado con exito');
    }

    public function editProducto($id)
    {
        $producto = Producto::find($id);
        $categoria = Producto::getCategoria($producto->id_categoria);
        $colores = Color::where('deleted_at', null)->where('id_producto', $producto->id_producto)->get();
        return view('admin.editProduct')->with([
            'producto'=>$producto, 
            'colores' => $colores, 
            'categoria' => $categoria
        ]);
    }

    public function addImagen(Request $request)
    {
        if( $request->hasFile('file') ) {
            $fileNameWithExt = $request->file('file')[0]->getClientOriginalName();
            $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')[0]->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('file')[0]->storeAs('public/img/products/', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        return $fileNameToStore;
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->descripcion_general = $request->input('desc_general');
        $producto->descripcion_detallada = $request->input('desc_detallada');
        $producto->id_categoria = $request->input('categoria');

        if($producto->imagen1 != $request->input('imagen1')){
            Storage::delete('public/img/products/'.$producto->imagen1);
            $producto->imagen1 = $request->input('imagen1');
        }
        
        if($producto->imagen2 != $request->input('imagen2')){
            Storage::delete('public/img/products/'.$producto->imagen2);
            $producto->imagen2 = $request->input('imagen2');
        }else if($producto->imagen2 != 'noimage.jpg' && $request->input('imagen2') == "") {
            Storage::delete('public/img/products/'.$producto->imagen2);
            $producto->imagen2 = null;
        }

        if($producto->imagen3 != $request->input('imagen3')){
            Storage::delete('public/img/products/'.$producto->imagen3);
            $producto->imagen3 = $request->input('imagen3');
        }else if($producto->imagen3 != 'noimage.jpg' && $request->input('imagen3') == "") {
            Storage::delete('public/img/products/'.$producto->imagen3);
            $producto->imagen3 = null;
        }

        if($producto->imagen4 != $request->input('imagen4')){
            Storage::delete('public/img/products/'.$producto->imagen4);
            $producto->imagen4 = $request->input('imagen4');
        }else if($producto->imagen4 != 'noimage.jpg' && $request->input('imagen4') == "") {
            Storage::delete('public/img/products/'.$producto->imagen4);
            $producto->imagen4 = null;
        }

        if($producto->imagen5 != $request->input('imagen5')){
            Storage::delete('public/img/products/'.$producto->imagen5);
            $producto->imagen5 = $request->input('imagen5');
        }else if($producto->imagen5 != 'noimage.jpg' && $request->input('imagen5') == "") {
            Storage::delete('public/img/products/'.$producto->imagen5);
            $producto->imagen5 = null;
        }

        $producto->save();

        $countColores = count($request->input('color'));
        for($i=0; $i<$countColores; $i++){
            if(array_key_exists($i, $request->input('id_color'))){
                $color = Color::find($request->input('id_color')[$i]);
                $color->color = $request->input('color')[$i];
                $color->precio = $request->input('precio')[$i];
                $color->cantidad = $request->input('cantidad')[$i];
                $color->rgb = $request->input('rgb')[$i];
                $color->id_producto = $producto->id_producto;
                $color->save();
            }else{
                //agregar nuevo color
                $color = new Color();
                $color->color = $request->input('color')[$i];
                $color->precio = $request->input('precio')[$i];
                $color->cantidad = $request->input('cantidad')[$i];
                $color->rgb = $request->input('rgb')[$i];
                $color->id_producto = $producto->id_producto;
                $color->save();
            }
        }

        //eliminar colores
        if ($request->has('color_delete')) {
            foreach($request->input('color_delete') as $ColorDelete){
                $color = Color::find($ColorDelete);
                $color->deleted_at = new DateTime();
                $color->save();
            }
        }

        return redirect('/admin/productos')->with('success', 'El Producto ha sido editado con exito');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->deleted_at = new DateTime();
        $producto->save();        
        return redirect('/admin/productos')->with('success', 'El Producto ha sido eliminado con exito');
    }

    public function restore($id)
    {
        $producto = Producto::find($id);
        $producto->deleted_at = null;
        $producto->save();        
        return redirect('/admin/productos')->with('success', 'El Producto ha sido restaurado con exito');
    }
}
