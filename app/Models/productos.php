<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model {
    protected $fillable = [
        'descripcion', 'pvp', 'stock', 'imagen', // Permitir asignación masiva para el campo imagen
    ];

    // Relaciones
    public function detallesPedido() {
        return $this->hasMany(DetallePedido::class);
    }
}
