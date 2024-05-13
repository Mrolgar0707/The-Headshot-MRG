<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetallePedido;
use App\Models\Pedido;
use App\Models\Producto;

class DetallesPedidoTableSeeder extends Seeder {
    public function run() {
        // Obtener el ID de un pedido existente para asociarlo a los detalles del pedido
        $pedido_id = Pedido::first()->id;

        // Obtener el ID de un producto existente para asociarlo a los detalles del pedido
        $producto_id = Producto::first()->id;

        // Crear un detalle de pedido de ejemplo
        DetallePedido::create([
            'cantidad' => 2,
            'precio' => 50.00,
            'producto_id' => $producto_id,
            'pedido_id' => $pedido_id,
        ]);
        // Puedes agregar más detalles de pedido aquí si lo deseas
    }
}
