<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallesPedido extends Model {
    protected $fillable = [
        'cantidad', 'precio', 'producto_id', 'pedido_id',
    ];

    // Relaciones
    public function producto() {
        return $this->belongsTo(Productos::class);
    }

    public function pedido() {
        return $this->belongsTo(Pedidos::class);
    }
}
