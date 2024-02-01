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
        Schema::create('contiene', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cesta');
            $table->unsignedBigInteger('id_producto');
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('id_cesta')->references('id')->on('cestas');
            $table->foreign('id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contiene');
    }
};
