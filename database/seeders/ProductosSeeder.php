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
            'imagen' => 'https://www.dia.es/compra-online/productos/lacteos-y-huevos/leche-entera/p/201234',
            'importe' => 0.75
        ]);
        Producto::create([
            'nombre' => 'Pan',
            'descripcion' => 'Pan de molde',
            'categoria' => 'alimentacion',
            'imagen' => 'https://www.dia.es/compra-online/productos/pan-y-bolleria/pan-de-molde/p/201236',
            'importe' => 0.95
        ]);
        Producto::create([
            'nombre' => 'Coca-Cola',
            'descripcion' => 'Coca-Cola',
            'categoria' => 'bebidas',
            'imagen' => 'https://www.dia.es/compra-online/productos/refrescos-y-zumos/refrescos-de-cola/refresco-de-cola/p/201237',
            'importe' => 1.25
        ]);
        Producto::create([
            'nombre' => 'Cerveza',
            'descripcion' => 'Cerveza',
            'categoria' => 'bebidas',
            'imagen' => 'https://www.dia.es/compra-online/productos/bebidas-y-zumos/cervezas/cerveza/p/201238',
            'importe' => 0.75
        ]);
        Producto::create([
            'nombre' => 'Detergente',
            'descripcion' => 'Detergente',
            'categoria' => 'limpieza',
            'imagen' => 'https://www.dia.es/limpieza-y-hogar/cuidado-de-la-ropa/p/273997',
            'importe' => 1.15
        ]);
        Producto::create([
            'nombre' => 'Lejía',
            'descripcion' => 'Lejía',
            'categoria' => 'limpieza',
            'imagen' => 'https://www.dia.es/compra-online/productos/higiene-y-cuidado-personal/gel-de-ducha/p/201239',
            'importe' => 1.30
        ]);
        Producto::create([
            'nombre' => 'Gel',
            'descripcion' => 'Gel de ducha',
            'categoria' => 'cuidadoPersonal',
            'imagen' => 'https://www.dia.es/compra-online/productos/higiene-y-cuidado-personal/gel-de-ducha/p/201239',
            'importe' => 1.25
        ]);
        Producto::create([
            'nombre' => 'Champú',
            'descripcion' => 'Champú',
            'categoria' => 'cuidadoPersonal',
            'imagen' => 'https://www.dia.es/compra-online/productos/higiene-y-cuidado-personal/champu/p/201240',
            'importe' => 1.25
        ]);
    }
}
