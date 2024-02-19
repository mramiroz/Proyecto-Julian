<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeader extends Seeder
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
            "nombre" => "Cuidado Personal",
            "route" => 'cuidado-personal'
        ]);
        Categoria::create([
            "nombre" => "Limpieza",
            "route" => "limpieza"
        ]);
    }
}
