<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Cliente;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('login.registrar');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        return view("login.completar")->with(['email' => $request->email, 'usuario' => $request->name, 'password' => $request->password]);
    }

    public function completar()
    {
        return view('login.completar');
    }

    public function registrar(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->usuario = $request->usuario;
        $user->password = Hash::make($request->password);
        $user->tipo = 2;
        $user->save();

        $cliente = new Cliente;
        $cliente->rfc = $request->rfc;
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->fecha_nac = $request->fecha_nac;
        $cliente->pais = $request->pais;
        $cliente->estado = $request->estado;
        $cliente->ciudad = $request->ciudad;
        $cliente->calle = $request->calle;
        $cliente->cp = $request->cp;
        $cliente->id_usuario = $user->id_usuario;
        $cliente->save();

        Auth::login($user);

        return redirect("/");
    }
}
