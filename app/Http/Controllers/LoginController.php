<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $usuario = Usuario::where('email', $request->email)->first();
        if ($usuario && Hash::check($request->password, $usuario->password)) {
            // Aquí podrías iniciar sesión o simplemente registrar el acceso
            // Ejemplo: guardar un log de acceso
            // ...
            return redirect()->back()->with('success', 'Inicio de sesión exitoso.');
        } else {
            return redirect()->back()->with('error', 'Credenciales incorrectas.');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:6',
        ]);

        $usuario = new Usuario();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        return redirect()->back()->with('success', 'Usuario registrado correctamente.');
    }
}
