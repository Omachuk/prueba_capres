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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50);
            $table->string('primer_nombre', 50);
            $table->string('segundo_nombre', 50);
            $table->string('primer_apellido', 50);
            $table->string('segundo_apellido', 50);
            $table->unsignedBigInteger ('id_rol');
            $table->string('password', 50);
            // Agrega más columnas aquí
            $table->timestamps();

            // Crear la clave foránea
            $table->foreign('id_rol')->references('id')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
