<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Valoracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;

class ValoracionController extends Controller
{
    public function index(Request $request){
        $valoracion = new Valoracion;
        $valoracion->comentario = $request->comment;
        $valoracion->puntuacion = $request->rating;
        $valoracion->id_usuario = Auth::user()->id_usuario;
        $valoracion->id_producto = $request->id_producto;
        $valoracion->fecha = new DateTime();
        $valoracion->save();
        return redirect("/product/".$request->id_producto)->with("success", "Su valoración fue publicada");
    }
}

