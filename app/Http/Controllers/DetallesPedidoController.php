<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesPedido;

class DetallesPedidoController extends Controller {
    public function index() {
        $detallesPedido = DetallesPedido::all();
        return view('detalles_pedido.index', compact('detallesPedido'));
    }

    public function create() {
        return view('detalles_pedido.create');
    }

    public function store(Request $request) {
        // Validar los datos del formulario
        $request->validate([
            // Agregar reglas de validación según sea necesario
        ]);

        // Crear un nuevo detalle de pedido en la base de datos
        DetallesPedido::create($request->all());

        return redirect()->route('detalles_pedido.index')->with('success', 'Detalle de pedido creado exitosamente.');
    }

    public function show($id) {
        $detallePedido = DetallesPedido::findOrFail($id);
        return view('detalles_pedido.show', compact('detallePedido'));
    }

    public function edit($id) {
        $detallePedido = DetallesPedido::findOrFail($id);
        return view('detalles_pedido.edit', compact('detallePedido'));
    }

    public function update(Request $request, $id) {
        // Validar los datos del formulario
        $request->validate([

        ]);

        // Actualizar la información del detalle de pedido en la base de datos
        $detallePedido = DetallesPedido::findOrFail($id);
        $detallePedido->update($request->all());

        return redirect()->route('detalles_pedido.index')->with('success', 'Detalle de pedido actualizado exitosamente.');
    }

    public function destroy($id) {
        // Eliminar un detalle de pedido de la base de datos
        $detallePedido = DetallesPedido::findOrFail($id);
        $detallePedido->delete();

        return redirect()->route('detalles_pedido.index')->with('success', 'Detalle de pedido eliminado exitosamente.');
    }
}
