<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller {
    public function index() {
        $productos = Productos::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos
        $validatedData = $request->validate([
            'descripcion' => 'required|string|max:255',
            'pvp' => 'required|numeric',
            'stock' => 'required|integer',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
        ]);

        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('imagenes', 'public');
            $validatedData['imagen'] = $imagenPath;
        }

        // Crear el producto
        Productos::create($validatedData);

        // Redirigir a la vista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show($id) {
        $producto = Productos::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    public function edit($id) {
        $producto = Productos::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id) {
        // Validar los datos del formulario
        $request->validate([
            // Agregar reglas de validación según sea necesario
        ]);

        // Actualizar la información del producto en la base de datos
        $producto = Productos::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy($id) {
        // Eliminar un producto de la base de datos
        $producto = Productos::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
