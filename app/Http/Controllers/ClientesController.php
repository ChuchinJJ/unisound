<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Color;
use App\Models\Producto;
use DateTime;

class ClientesController extends Controller
{
    public function index(Request $request){
        $clientes =  Cliente::all();

        $detalleVenta = DetalleVenta::all();

        return view('admin.clientes')->with([
            'clientes' => $clientes,
            'detalleVenta' => $detalleVenta]);
    }

    public function datos($id){

        $cliente = Cliente::find($id);
        $ventas = Venta::where('id_cliente',$id)->get();

        return view('admin.clientesDetalles')->with([
            'cliente' => $cliente,
            'ventas' => $ventas
        ]); 
    }

    public function detalles($id){
        $venta = Venta::find($id);
        $detalles =  DetalleVenta::where('id_venta', $id)->get();
        $cliente = Cliente::find($venta->id_cliente);
        $colores = Color::all();
        $productos = Producto::all();
        return view('admin.detalleVentas')->with([
            'venta' => $venta,
            'detalles' => $detalles,
            'cliente' => $cliente,
            'colores' => $colores,
            'productos' => $productos
        ]);
    }

    public function edit($id){
        $venta = Venta::find($id);
        return view('admin.updateVentas')->with('venta', $venta);
    }

    public function update($id, Request $request){
        $venta = Venta::find($id);
        $venta->status = $request->input('status');
        $venta->detalles = $request->input('detalles');
        if($request->input('pagado') == '0'){
            $venta->pagado = 0;
        }else{
            $venta->pagado = 1;
        }
        $venta->save();
        return redirect('admin/ventas')->with('success', 'La venta ha sido editada con exito');
    }
}



