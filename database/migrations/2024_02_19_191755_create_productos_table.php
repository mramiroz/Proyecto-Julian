<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('descripcion');
            $table->unsignedBigInteger('id_categoria')->constrained('categorias');
            $table->string('imagen')->default('https://ucarecdn.com/4ef09f9a-faee-4844-b1a2-3ff0bf6db684/default.jpeg');
            $table->double('importe');
            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
