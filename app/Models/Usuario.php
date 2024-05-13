<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
    protected $fillable = [
        'usuario', 'contraseña', 'nombre', 'apellidos', 'email', 'calle', 'codigo_postal', 'numero_calle',
    ];

    // Relaciones
    public function pedidos() {
        return $this->hasMany(Pedido::class);
    }
}
