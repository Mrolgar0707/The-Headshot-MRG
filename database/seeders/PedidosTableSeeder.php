<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\Usuario;
use Carbon\Carbon;

class PedidosTableSeeder extends Seeder {
    public function run() {
        // Obtener el ID de un usuario existente para asociarlo al pedido
        $usuario_id = Usuario::first()->id;

        // Crear un pedido de ejemplo
        Pedido::create([
            'fecha_pedido' => Carbon::now(),
            'fecha_envio' => Carbon::now()->addDays(2),
            'total_pedido' => 100.00,
            'usuario_id' => $usuario_id,
        ]);
    }
}
