<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Producto extends Model
{
    use HasFactory, Searchable;

    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria',
        'imagen',
        'importe'
    ];
    public function toSearchableArray()
    {
        $array = $this->only('nombre', 'descripcion', 'categoria');
        return $array;
    }
}
