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
            $table->string('nombre_producto', 150);
            $table->integer('lotes');
            $table->integer('cantidad_por_lote');
            $table->integer('total_prenda');
            $table->integer('existencia_prenda');
            $table->double('precio_lote', 16, 6);
            $table->double('precio_por_prenda', 16, 6);
            $table->text('img')->nullable();
            $table->date('fecha_ingreso');
            // Agrega más columnas aquí
            $table->timestamps();
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
