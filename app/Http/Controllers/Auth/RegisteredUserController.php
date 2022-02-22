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
            'name' => ['required', 'string', 'max:45'],
            'email' => ['required', 'string', 'email', 'max:45', 'unique:usuarios'],
            'password' => ['required', 'confirmed', Rules\Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
            ],
        ]);

        return redirect("completar-registro")->withInput();
    }

    public function completar()
    {
        return view('login.completar');
    }

    public function registrar(Request $request)
    {   
        $this->validate($request, [
            'nombre' => ['required', 'string', 'max:45'],
            'apellidos' => ['required', 'string', 'max:45'],
            'telefono' => ['required','digits:10'],
            'rfc' => ['max:13'],
            'pais' => ['required', 'string', 'max:45'],
            'estado' => ['required', 'string', 'max:45'],
            'ciudad' => ['required', 'string', 'max:45'],
            'calle' => ['required', 'string', 'max:100']
        ]);

        $user = new User;
        $user->email = $request->email;
        $user->usuario = $request->name;
        $user->password = Hash::make($request->pass);
        $user->tipo = 2;
        $user->save();

        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->rfc = $request->rfc;
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
