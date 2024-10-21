<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 50);
            $table->foreignId('empresa_id')->constrained('empresas');
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('imagen_url', 255)->nullable();
            $table->enum('estado', ['activo', 'inactivo']) ->default('activo');
            $table->enum('rol', ['administrador', 'colaborador' , 'supervisor'])->default('administrador');

            $table->timestamps();

            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
