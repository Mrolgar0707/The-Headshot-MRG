<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosTableSeeder extends Seeder {
    public function run() {
        // Crear productos de ejemplo
        Producto::create([
            'descripcion' => 'Teclado mecánico',
            'pvp' => 80.00,
            'stock' => 10,
        ]);

        Producto::create([
            'descripcion' => 'Mouse gamer',
            'pvp' => 40.00,
            'stock' => 20,
        ]);

        Producto::create([
            'descripcion' => 'Monitor gaming 27 pulgadas',
            'pvp' => 300.00,
            'stock' => 5,
        ]);

        // Puedes agregar más productos aquí si lo deseas
    }
}
