<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    // Mostrar la lista de pedidos
    public function index()
    {
        $pedidos = Pedidos::all();
        return view('pedidos.index', compact('pedidos'));
    }

    // Mostrar el formulario para crear un nuevo pedido
    public function create()
    {
        return view('pedidos.create');
    }

    // Almacenar un nuevo pedido
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fecha_pedido' => 'required|date',
            'fecha_envio' => 'required|date',
            'total' => 'required|numeric',
            'usuario_id' => 'required|integer|exists:users,id',
        ]);

        Pedidos::create($validatedData);

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente.');
    }

    // Mostrar un pedido específico
    public function show($id)
    {
        $pedido = Pedidos::findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    // Mostrar el formulario para editar un pedido existente
    public function edit($id)
    {
        $pedido = Pedidos::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }

    // Actualizar un pedido existente
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fecha_pedido' => 'required|date',
            'fecha_envio' => 'required|date',
            'total' => 'required|numeric',
            'usuario_id' => 'required|integer|exists:users,id',
        ]);

        $pedido = Pedidos::findOrFail($id);
        $pedido->update($validatedData);

        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado exitosamente.');
    }

    // Eliminar un pedido
    public function destroy($id)
    {
        $pedido = Pedidos::findOrFail($id);
        $pedido->delete();

        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado exitosamente.');
    }
}
