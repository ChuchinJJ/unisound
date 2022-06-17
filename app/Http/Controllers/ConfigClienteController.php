<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Producto;
use App\Models\Color;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class ConfigClienteController extends Controller
{
    public function index(Request $request){
        $usuario = User::find(Auth::user()->id_usuario);
        $cliente = Cliente::where('id_usuario', $usuario->id_usuario)->first();
        $filtro = $request->input('filtro', 'all');
        if($filtro == 'all'){
            $ventas = Venta::where('id_cliente', $cliente->email)->orderBy("fecha","DESC")->get();
        }else{
            $valorFiltro = [date('Y/m/d', strtotime(date('Y/m/d')."- 30 days")), date('Y/m/d')];
            if($filtro == "30+"){
                $valorFiltro = [date('Y/m/d', strtotime(date('Y/m/d')."- 6 month")), date('Y/m/d', strtotime(date('Y/m/d')."- 30 days"))];
            }else if($filtro == "6+"){
                $valorFiltro = [date('Y/m/d', strtotime(date('Y/m/d')."- 1 year")), date('Y/m/d', strtotime(date('Y/m/d')."- 6 month"))];
            }
            $request->flash();
            $ventas = Venta::where('id_cliente', $cliente->email)
                ->where('fecha', '>', $valorFiltro['0'])
                ->where('fecha', '<', $valorFiltro['1'])
                ->orderBy("fecha","DESC")
                ->get();
        }
        $detalleVenta = DetalleVenta::all();
        

        return view('pages.cliente')->with([
            'usuario' => $usuario, 
            'cliente' => $cliente,
            'ventas' =>  $ventas,
            'detalles' => $detalleVenta
        ]);
    }

    public function update(Request $request){

        $request->validate([
            'nombre' => ['required', 'string', 'max:45'],
            'apellidos' => ['required', 'string', 'max:45'],
            'telefono' => ['required','digits:10'],
            'rfc' => ['max:13'],
            'pais' => ['required', 'string', 'max:45'],
            'estado' => ['required', 'string', 'max:45'],
            'ciudad' => ['required', 'string', 'max:45'],
            'calle' => ['required', 'string', 'max:100']
        ]);

        $cliente = Cliente::find($request->input('email'));
        $cliente->nombre = $request->input('nombre');
        $cliente->apellidos = $request->input('apellidos');
        $cliente->telefono = $request->input('telefono');
        $cliente->rfc = $request->input('rfc');
        $cliente->fecha_nac = $request->input('fechaNac');
        $cliente->cp = $request->input('cp');
        $cliente->pais = $request->input('pais');
        $cliente->estado = $request->input('estado');
        $cliente->ciudad = $request->input('ciudad');
        $cliente->calle = $request->input('calle');
        $cliente->save();
        return back()->with('success', 'Sus datos han sido actualizados');
    }

    public function newPass(Request $request){
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
            ],
        ]);

        $usuario = User::find(Auth::user()->id_usuario);
        if (Hash::check($request->input('old_pass'), $usuario->password)) {
            $usuario->password = Hash::make($request->input('password'));
            $usuario->save();
            return back()->with('success', 'Su contraseña ha sido actualizada');
        }else{
            return back()->with('success', 'Su contraseña no es correcta');
        }
    }

    public function clienteDetalle($id) {
        $venta = Venta::find($id);
        $detalles = DetalleVenta::where('id_venta', $id)->get();
        $colores = Color::all();
        $productos = Producto::all();

        return view('pages.clienteDetalle')->with([
            'venta' => $venta,
            'detalles' => $detalles,
            'colores' => $colores,
            'productos' => $productos
        ]);
    }
    
}

