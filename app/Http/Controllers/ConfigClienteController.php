<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;

class ConfigClienteController extends Controller
{
    public function index(){
        $usuario = User::find(Auth::user()->id_usuario);
        $cliente = Cliente::where('id_usuario', $usuario->id_usuario)->first();

        return view('pages.cliente')->with(['usuario' => $usuario, 'cliente' => $cliente]);
    }

    
}

