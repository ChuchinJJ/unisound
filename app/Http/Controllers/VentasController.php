<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Cliente;
use App\Models\Color;
use App\Models\Producto;

class VentasController extends Controller
{   
    public function index(Request $request)
    {   
        $status = $request->input('status', '');
        $fechas = $request->input('fechas', '');
        if($status != '' && $fechas != ''){
            $separar = explode('-', $fechas);
            $fecha_inicio = date('Y-m-d', strtotime(str_replace("/", "-", $separar[0])));
            $fecha_fin = date('Y-m-d', strtotime(str_replace("/", "-", $separar[1])."+ 1 days"));
            $ventas = Venta::where('status', $status)
                ->where('fecha', '>=', $fecha_inicio)
                ->where('fecha', '<=', $fecha_fin)
                ->paginate(10);
        }else{
            if($fechas != ''){
                $separar = explode('-', $fechas);
                $fecha_inicio = date('Y-m-d', strtotime(str_replace("/", "-", $separar[0])));
                $fecha_fin = date('Y-m-d', strtotime(str_replace("/", "-", $separar[1])."+ 1 days"));
                $ventas = Venta::where('fecha', '>=', $fecha_inicio)
                    ->where('fecha', '<=', $fecha_fin)
                    ->paginate(10);
            }else if($status != ''){
                $ventas = Venta::where('status', $status)
                    ->where('fecha', '>=', date('Y/m/d', strtotime(date('Y/m/d'))))
                    ->where('fecha', '<=', date('Y/m/d', strtotime(date('Y/m/d')."+ 1 days")))
                    ->paginate(10);
            }else{
                $ventas = Venta::where('fecha', '>=', date('Y/m/d', strtotime(date('Y/m/d'))))
                    ->where('fecha', '<=', date('Y/m/d', strtotime(date('Y/m/d')."+ 1 days")))
                    ->paginate(10);
            }
        }
        $clientes = Cliente::all();
        $request->flash();
        return view('admin.ventas')->with(['ventas' => $ventas, 'clientes' => $clientes]);
    }

    public function detalle($id){
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

    public function update($id){
        return view('admin.dashboard');
    }
}
