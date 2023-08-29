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
        Schema::create('rols', function (Blueprint $table) {
            $table->id();
            $table->string('rol', 50);
            $table->string('descripcion', 250);
            $table->integer('estado')->comment('0 = Inactivo; 1 = activo');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('username');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger ('id_rol');
            $table->integer('activo')->comment('0 = Inactivo; 1 = activo; 2 = en espera de aprobacion');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_rol')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rols');
        Schema::dropIfExists('users');
    }
};
