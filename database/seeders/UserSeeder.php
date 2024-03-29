<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = Usuario::create([
            'nombre' => 'prueba',
            'apellidos' =>'prueba',
            'direccion' => 'prueba',
            'email' => 'prueba@prueba.com',
            'password' => Hash::make('prueba')
        ]);
        $usuario->carrito()->create([]);

        $usuario = Usuario::create([
            'nombre' => 'admin',
            'apellidos' =>'admin',
            'direccion' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'tipo' => 'admin'
        ]);
        $usuario->carrito()->create([]);
    }
}
