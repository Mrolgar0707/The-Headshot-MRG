<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Pedidos;
use App\Models\DetallesPedido;
use Illuminate\Support\Facades\Auth;

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
        ]);

        $producto = Productos::create($validatedData);
        $producto->imagen = $producto->id . '-producto.' . 'jpg';
        $producto->save();

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
        ]);

        // Actualizar la información del producto en la base de datos
        $producto = Productos::findOrFail($id);
        $producto->update($request->all());
        $producto->imagen = $producto->id . '-producto.' . 'jpg';
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function comprar($id) {
        // Verifica si el usuario está autenticado
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Debe iniciar sesión para realizar una compra.');
        }

        $producto = Productos::findOrFail($id);

        // Crea un nuevo pedido
        $pedido = new Pedidos();
        $pedido->fecha_pedido = now();
        $pedido->fecha_envio = now()->addDays(3); // Por ejemplo, enviar en 3 días
        $pedido->total_pedido = $producto->pvp;
        $pedido->usuario_id = Auth::id();
        $pedido->save();

        // Crea los detalles del pedido
        $detallePedido = new DetallesPedido();
        $detallePedido->cantidad = 1; // Por defecto, compra una unidad
        $detallePedido->precio = $producto->pvp;
        $detallePedido->producto_id = $producto->id;
        $detallePedido->pedido_id = $pedido->id;
        $detallePedido->save();

        // Redirigir a la vista de productos con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto comprado exitosamente.');
    }

    public function destroy($id) {
        // Eliminar un producto de la base de datos
        $producto = Productos::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
