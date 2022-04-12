<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cupon;
use App\Models\DetalleCupon;
use Illuminate\Support\Str;
use DateTime;

class CuponesController extends Controller
{
    public function index(Request $request)
    {   
        $filtro = $request->input('filtro', 'all');
        if($filtro == 'all'){
            $cupones = Cupon::where('deleted_at', null)->paginate(10);
        }else{
            $fechaVigente = date('Y-m-d');
            $cupones = Cupon::where('deleted_at', null)
            ->where('fecha_inicio', '<=', $fechaVigente)
            ->where('fecha_fin', '>=', $fechaVigente)
            ->paginate(10);
        }
        $request->flash();
        return view('admin.cupones')->with('cupones', $cupones);
    }

    public function add()
    {
        $fechaVigente = date('Y-m-d', strtotime(str_replace("/", "-", Cupon::fechaVigente())."+ 1 days"));
        return view('admin.addCupon')->with('fechaVigente', $fechaVigente);
    }

    public function create(Request $request)
    {
        $cupon = new Cupon();
        $cupon->nombre = $request->input("nombre");
        $cupon->codigo = Str::random(6);
        $cupon->descuento = $request->input("descuento");
        $cupon->fecha_inicio = $request->input("fecha_inicio");
        $cupon->fecha_fin = $request->input("fecha_fin"); 
        $cupon->descripcion = $request->input("descripcion");
        $cupon->save();

        foreach($request->input("producto") as $producto){
            $detalle_cupon = new DetalleCupon();
            $detalle_cupon->id_cupon = $cupon->id_cupon;
            $detalle_cupon->id_producto = $producto;
            $detalle_cupon->save();
        }

        return redirect('/admin/cupones')->with('success', 'El cupón ha sido agregado con exito, Su código es "'.$cupon->codigo.'"');
    }

    public function edit($id)
    {
        $cupon = Cupon::find($id);
        $fechaVigente = Cupon::fechaVigente();
        if($fechaVigente == $cupon->fecha_fin){
            $fechaVigente = date('Y-m-d', strtotime(str_replace("/", "-", Cupon::fechaVigente(2))."+ 1 days"));
        }
        $detalle_cupon = DetalleCupon::where('id_cupon', $id)->get();
        return view('admin.updateCupon')->with([
            'cupon' => $cupon, 
            'detalle' => $detalle_cupon,
            'fechaVigente' => date('Y-m-d', strtotime(str_replace("/", "-", $fechaVigente)."+ 1 days"))
        ]);
    }

    public function update($id, Request $request)
    {
        $cupon = Cupon::find($id);
        $cupon->nombre = $request->input("nombre");
        $cupon->descuento = $request->input("descuento");
        $cupon->fecha_inicio = $request->input("fecha_inicio");
        $cupon->fecha_fin = $request->input("fecha_fin"); 
        $cupon->descripcion = $request->input("descripcion");
        $cupon->save();

        $eliminar_cupones = DetalleCupon::where('id_cupon', $id)->get();
        foreach($eliminar_cupones as $eliminar_cupon){
            $eliminar_cupon->delete();
        }

        foreach($request->input("producto") as $producto){
            $detalle_cupon = new DetalleCupon();
            $detalle_cupon->id_cupon = $cupon->id_cupon;
            $detalle_cupon->id_producto = $producto;
            $detalle_cupon->save();
        }

        return redirect('/admin/cupones')->with('success', 'El cupón ha sido actualizado con exito');
    }

    public function destroy($id)
    {
        $cupon = Cupon::find($id);
        $cupon->deleted_at = new DateTime();
        $cupon->save();
        return redirect('/admin/cupones')->with('success', 'El cupón ha sido suspendido');
    }

    /*public function restore($id)
    {
        $cupon = Cupon::find($id);
        $cupon->deleted_at = null;
        $cupon->save();
        return redirect('/admin/cupones')->with('success', 'El cupón ha sido restaurado con exito');
    }*/
}
