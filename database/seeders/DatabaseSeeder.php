<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use database\seeders\DetallesPedidoTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsuariosTableSeeder::class,
            ProductosTableSeeder::class,
            PedidosTableSeeder::class,
            DetallesPedidoTableSeeder::class,
        ]);
    }
}
