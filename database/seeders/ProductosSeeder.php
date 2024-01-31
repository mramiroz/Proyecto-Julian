<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Coca Cola',
            'descripcion' => 'Bebida gaseosa',
            'imagen' => 'img/cebolla.png',
            'importe' => 1.5,
        ]);
        Producto::create([
            'nombre' => 'Fanta',
            'descripcion' => 'Bebida gaseosa',
            'imagen' => 'img/cebolla.png',
            'importe' => 1.5,
        ]);
        Producto::create([
            'nombre' => 'Sprite',
            'descripcion' => 'Bebida gaseosa',
            'imagen' => 'img/cebolla.png',
            'importe' => 1.5,
        ]);
        Producto::create([
            'nombre' => 'Aquarius',
            'descripcion' => 'Bebida gaseosa',
            'imagen' => 'img/cebolla.png',
            'importe' => 1.5,
        ]);
        Producto::create([
            'nombre' => 'Nestea',
            'descripcion' => 'Bebida gaseosa',
            'imagen' => 'img/cebolla.png',
            'importe' => 3,
        ]);
        Producto::create([
            'nombre' => 'Monster',
            'descripcion' => 'Bebida energética',
            'imagen' => 'img/cebolla.png',
            'importe' => 2.5,
        ]);
    }
}
