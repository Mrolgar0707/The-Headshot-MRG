<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller {
    public function index() {
        $usuarios = Usuario::all();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function create() {
        return view('usuarios.create');
    }

    public function store(Request $request) {
        // Validar los datos del formulario
        $request->validate([
            'usuario' => 'required',
            'contraseña' => 'required',
            // Agregar otras reglas de validación según sea necesario
        ]);

        // Crear un nuevo usuario en la base de datos
        Usuario::create($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function show($id) {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', ['usuario' => $usuario]);
    }

    public function edit($id) {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id) {
        // Validar los datos del formulario
        $request->validate([
            'usuario' => 'required',
            'contraseña' => 'required',
            // Agregar otras reglas de validación según sea necesario
        ]);

        // Actualizar la información del usuario en la base de datos
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy($id) {
        // Eliminar un usuario de la base de datos
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
