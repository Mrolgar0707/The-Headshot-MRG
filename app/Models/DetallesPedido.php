<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model {
    protected $fillable = [
        'cantidad', 'precio', 'producto_id', 'pedido_id',
    ];

    // Relaciones
    public function producto() {
        return $this->belongsTo(Producto::class);
    }

    public function pedido() {
        return $this->belongsTo(Pedido::class);
    }
}
