<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contiene extends Model
{
    use HasFactory;
    protected $table = 'contiene';
    protected $fillable = [
        'id_carrito',
        'id_producto',
        'cantidad'
    ];
}
