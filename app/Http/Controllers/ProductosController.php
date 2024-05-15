<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller {
    public function index() {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create() {
        return view('productos.create');
    }

    public function store(Request $request) {
        // Validar los datos del formulario
        $request->validate([
            // Agregar reglas de validación según sea necesario
        ]);

        // Crear un nuevo producto en la base de datos
        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show($id) {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    public function edit($id) {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id) {
        // Validar los datos del formulario
        $request->validate([
            // Agregar reglas de validación según sea necesario
        ]);

        // Actualizar la información del producto en la base de datos
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy($id) {
        // Eliminar un producto de la base de datos
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
