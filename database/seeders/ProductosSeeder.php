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
            'nombre' => 'Leche',
            'descripcion' => 'Leche entera',
            'categoria' => 'alimentacion',
            'imagen' => 'https://ucarecdn.com/1c420ba1-3236-49d7-9eb8-5ce6292f8b75/-/preview/500x500/-/quality/smart/-/format/auto/',
            'importe' => 0.75
        ]);
        Producto::create([
            'nombre' => 'Pan',
            'descripcion' => 'Pan de molde',
            'categoria' => 'alimentacion',
            'imagen' => 'https://ucarecdn.com/66379d3d-d0fd-4eb8-ab4e-bf4ca0d1abe8/-/preview/500x500/-/quality/smart/-/format/auto/',
            'importe' => 0.95
        ]);
        Producto::create([
            'nombre' => 'Coca-Cola',
            'descripcion' => 'Coca-Cola',
            'categoria' => 'bebidas',
            'imagen' => 'https://ucarecdn.com/74f38691-06cc-461c-aef5-df701636e019/-/preview/500x500/-/quality/smart/-/format/auto/',
            'importe' => 1.25
        ]);
        Producto::create([
            'nombre' => 'Cerveza',
            'descripcion' => 'Cerveza',
            'categoria' => 'bebidas',
            'imagen' => 'https://ucarecdn.com/d693d0a9-ff53-4819-8c8b-077a29c27511/-/preview/500x500/-/quality/smart/-/format/auto/',
            'importe' => 0.75
        ]);
        Producto::create([
            'nombre' => 'Detergente',
            'descripcion' => 'Detergente',
            'categoria' => 'limpieza',
            'imagen' => 'https://ucarecdn.com/269848d9-10cc-4e69-a118-f515f5681a1d/-/preview/500x500/-/quality/smart/-/format/auto/',
            'importe' => 1.15
        ]);
        Producto::create([
            'nombre' => 'Lejía',
            'descripcion' => 'Lejía',
            'categoria' => 'limpieza',
            'imagen' => 'https://ucarecdn.com/73e0a2a2-e28d-41ea-afc0-65555b540e20/-/preview/500x500/-/quality/smart/-/format/auto/',
            'importe' => 1.30
        ]);
        Producto::create([
            'nombre' => 'Gel',
            'descripcion' => 'Gel de ducha',
            'categoria' => 'cuidadoPersonal',
            'imagen' => 'https://ucarecdn.com/d87ca65a-9a18-4369-988b-71e9060a307c/-/preview/500x500/-/quality/smart/-/format/auto/',
            'importe' => 1.25
        ]);
        Producto::create([
            'nombre' => 'Champú',
            'descripcion' => 'Champú',
            'categoria' => 'cuidadoPersonal',
            'imagen' => 'https://ucarecdn.com/0709a5f8-762b-4fc8-bb69-7da21e019f6a/-/preview/500x500/-/quality/smart/-/format/auto/',
            'importe' => 1.25
        ]);
    }
}
