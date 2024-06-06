<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
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
        return view('auth.register');
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
            'usuario' => ['required', 'string', 'max:255', 'unique:usuarios'],
            'contraseña' => ['required', 'confirmed', Rules\Password::defaults()],
            'nombre' => ['required', 'string', 'max:255'],
            'apellidos' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'calle' => ['nullable', 'string', 'max:255'],
            'codigo_postal' => ['nullable', 'string', 'max:10'],
            'numero_calle' => ['nullable', 'string', 'max:10'],
        ]);

        $user = Usuario::create([
            'usuario' => $request->usuario,
            'contraseña' => Hash::make($request->password),
            'nombre' => $request->name,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'calle' => $request->calle,
            'codigo_postal' => $request->codigo_postal,
            'numero_calle' => $request->numero_calle,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
