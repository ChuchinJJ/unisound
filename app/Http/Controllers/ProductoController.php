<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Color;
use App\Models\Valoracion;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/shop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        $categoria = Producto::getCategoria($producto->id_categoria);
        $colores = Color::orderBy('precio','asc')->where('id_producto', $producto->id_producto)->get();
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
            $color->id_producto = $producto->id_producto;
            $color->save();
        }  
    }

    public function complete(){
        return redirect('/admin/productos')->with('success', 'El Producto ha sido agregado con exito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
