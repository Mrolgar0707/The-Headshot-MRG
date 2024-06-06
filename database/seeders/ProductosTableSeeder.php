<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Productos;

class ProductosTableSeeder extends Seeder {
    public function run() {
        // Crear productos de ejemplo
        Productos::create([
            'descripcion' => 'Teclado mecánico',
            'pvp' => 80.00,
            'stock' => 10,
        ]);

        Productos::create([
            'descripcion' => 'Mouse gamer',
            'pvp' => 40.00,
            'stock' => 20,
        ]);

        Productos::create([
            'descripcion' => 'Monitor gaming 27 pulgadas',
            'pvp' => 300.00,
            'stock' => 5,
        ]);
    }
}
