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
    Schema::create('proveedores', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombre', 255);
        $table->string('direccion', 255)->nullable();
        $table->string('telefono', 50)->nullable();
        $table->string('email', 255)->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('proveedores');
}
};
