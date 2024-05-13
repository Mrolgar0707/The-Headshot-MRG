<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model {
    protected $fillable = [
        'fecha_pedido', 'fecha_envio', 'total_pedido', 'usuario_id',
    ];

    // Relaciones
    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }

    public function detallesPedido() {
        return $this->hasMany(DetallePedido::class);
    }
}
