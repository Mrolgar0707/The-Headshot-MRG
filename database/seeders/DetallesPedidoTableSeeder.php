<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetallesPedido;
use App\Models\Pedidos;
use App\Models\Productos;

class DetallesPedidoTableSeeder extends Seeder {
    public function run() {
        // Obtener el ID de un pedido existente para asociarlo a los detalles del pedido
        $pedido_id = Pedidos::first()->id;

        // Obtener el ID de un producto existente para asociarlo a los detalles del pedido
        $producto_id = Productos::first()->id;

        // Crear un detalle de pedido de ejemplo
        DetallesPedido::create([
            'cantidad' => 2,
            'precio' => 50.00,
            'producto_id' => $producto_id,
            'pedido_id' => $pedido_id,
        ]);

    }
}
