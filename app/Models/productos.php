<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model {
    protected $fillable = [
        'descripcion', 'pvp', 'stock',
    ];

    // Relaciones
    public function detallesPedido() {
        return $this->hasMany(DetallePedido::class);
    }
}
