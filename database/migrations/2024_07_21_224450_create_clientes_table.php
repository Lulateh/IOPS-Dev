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
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_cliente', 50);
            $table->string('email', 100);
            $table->string('telefono', 20);
            $table->string('direccion', 250);
            $table->enum('estado', ['activo', 'inactivo']) ->default('activo');
            $table->foreignId('empresa_id')->constrained('empresas');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
