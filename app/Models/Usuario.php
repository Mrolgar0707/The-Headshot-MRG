<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'usuarios'; // Asegúrate de que esto esté configurado correctamente

    protected $fillable = [
        'usuario', 'contraseña', 'nombre', 'apellidos', 'email', 'calle', 'codigo_postal', 'numero_calle',
    ];

    protected $hidden = [
        'contraseña', 'remember_token',
    ];

    // Si estás usando Laravel 9 o superior, asegúrate de que el atributo de contraseña esté nombrado correctamente.
    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    // Relaciones
    public function pedidos() {
        return $this->hasMany(Pedidos::class);
    }
}
