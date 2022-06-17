<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Cliente;
use App\Models\Color;
use App\Models\Producto;
use App\Models\Notificacion;
use PDF;

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

    public function download(Request $request)
    {   
        $fechas = $request->input('fechas');
        $separar = explode('-', $fechas);
        $fecha_inicio = date('Y-m-d', strtotime(str_replace("/", "-", $separar[0])));
        $fecha_fin = date('Y-m-d', strtotime(str_replace("/", "-", $separar[1])."+ 1 days"));
        $ventas = Venta::where('fecha', '>=', $fecha_inicio)->where('fecha', '<=', $fecha_fin)->get();
        $clientes = Cliente::all();
        
        $pdf = PDF::loadView('pdf.ventas', ['ventas' => $ventas,'clientes' => $clientes, 'fechas' => $fechas]);
        return $pdf->download('ventas Unisound.pdf');
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

    public function notificacion($id){
        $notificacion = Notificacion::find($id);
        $id_venta = $notificacion->id_venta;
        $notificacion->delete();
        return redirect('admin/ventas/'.$id_venta.'/detalle');
    }
}
