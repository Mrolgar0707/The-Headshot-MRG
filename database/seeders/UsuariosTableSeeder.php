<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosTableSeeder extends Seeder {
    public function run() {
        // en el método run()
        Usuario::create([
            'usuario' => 'administrador',
            'contraseña' => bcrypt('admin1234'),
            'nombre' => 'Manuel',
            'apellidos' => 'Roldan Garcia',
            'email' => 'manuelroldan004@gmail.com',
            'calle' => 'Huerta Gaspar',
            'codigo_postal' => '41520',
            'numero_calle' => '4',
        ]);
    }
}
