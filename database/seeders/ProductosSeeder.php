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
            'imagen' => 'images/Leche.jpg',
            'importe' => 0.75
        ]);
        Producto::create([
            'nombre' => 'Pan',
            'descripcion' => 'Pan de molde',
            'categoria' => 'alimentacion',
            'imagen' => 'https://m.media-amazon.com/images/I/716lpUzkOiL.jpg',
            'importe' => 0.95
        ]);
        Producto::create([
            'nombre' => 'Coca-Cola',
            'descripcion' => 'Coca-Cola',
            'categoria' => 'bebidas',
            'imagen' => 'https://www.mosbo.es/cdn/shop/products/coca-cola-lata-33-cl-pack-24-und.jpg?v=1679402039&width=1445',
            'importe' => 1.25
        ]);
        Producto::create([
            'nombre' => 'Cerveza',
            'descripcion' => 'Cerveza',
            'categoria' => 'bebidas',
            'imagen' => 'https://m.media-amazon.com/images/I/41qRmrBrK4L.jpg',
            'importe' => 0.75
        ]);
        Producto::create([
            'nombre' => 'Detergente',
            'descripcion' => 'Detergente',
            'categoria' => 'limpieza',
            'imagen' => 'https://static.carrefour.es/hd_350x_/img_pim_food/769169_00_1.jpg',
            'importe' => 1.15
        ]);
        Producto::create([
            'nombre' => 'Lejía',
            'descripcion' => 'Lejía',
            'categoria' => 'limpieza',
            'imagen' => 'https://media.gettyimages.com/id/458577301/es/foto/clorox-lej%C3%ADa.jpg?s=612x612&w=0&k=20&c=43bp9DFFvh-Z7I8nZEYzbqk6uUvWOCeyS4UnhfobaEc=',
            'importe' => 1.30
        ]);
        Producto::create([
            'nombre' => 'Gel',
            'descripcion' => 'Gel de ducha',
            'categoria' => 'cuidadoPersonal',
            'imagen' => 'https://www.perfumeriaslaguna.com/images/products-listing/gel-moussel-clasico-viaje-bolso-bano-y-ducha.jpg',
            'importe' => 1.25
        ]);
        Producto::create([
            'nombre' => 'Champú',
            'descripcion' => 'Champú',
            'categoria' => 'cuidadoPersonal',
            'imagen' => 'https://www.grutinetpro.com/articulos/lg/lg_309554_0.jpg',
            'importe' => 1.25
        ]);
    }
}
