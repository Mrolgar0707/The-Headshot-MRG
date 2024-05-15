<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedidos;

class PedidosController extends Controller {
    public function index() {
        $pedidos = Pedidos::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create() {
        return view('pedidos.create');
    }

    public function store(Request $request) {
        // Validar los datos del formulario
        $request->validate([
            // Agregar reglas de validación según sea necesario
        ]);

        // Crear un nuevo pedido en la base de datos
        Pedidos::create($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente.');
    }

    public function show($id) {
        $pedido = Pedidos::findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    public function edit($id) {
        $pedido = Pedidos::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, $id) {
        // Validar los datos del formulario
        $request->validate([
            // Agregar reglas de validación según sea necesario
        ]);

        // Actualizar la información del pedido en la base de datos
        $pedido = Pedidos::findOrFail($id);
        $pedido->update($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado exitosamente.');
    }

    public function destroy($id) {
        // Eliminar un pedido de la base de datos
        $pedido = Pedidos::findOrFail($id);
        $pedido->delete();

        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado exitosamente.');
    }
}
