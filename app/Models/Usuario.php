<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrito;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'direccion',
        'password',
        'tipo'
    ];

    public function carrito()
    {
        return $this->hasOne(Carrito::class, 'id_usuario');
    }
}
