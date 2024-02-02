<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fileable = [
        'nombre',
        'apellidos',
        'email',
        'direccion',
        'password',
        'tipo'
    ];
}
