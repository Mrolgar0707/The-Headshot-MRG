<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'usuarios';

    protected $fillable = [
        'usuario', 'contraseña', 'nombre', 'apellidos', 'email', 'calle', 'codigo_postal', 'numero_calle',
    ];

    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    // Relaciones
    public function pedidos() {
        return $this->hasMany(Pedidos::class);
    }
}
