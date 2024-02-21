<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            "nombre" => "Alimentación",
            "route" => 'alimentacion'
        ]);
        Categoria::create([
            "nombre" => "Bebidas",
            "route" => 'bebidas'
        ]);
        Categoria::create([
            "nombre" => "Cuidado personal",
            "route" => 'cuidado-personal'
        ]);
        Categoria::create([
            "nombre" => "Limpieza",
            "route" => "limpieza"
        ]);
    }
}
