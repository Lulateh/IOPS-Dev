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
    Schema::create('productos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombre', 50);
        $table->string('marca', 50);
        $table->string('descripcion', 255)->nullable();
        $table->decimal('precio', 10, 2);
        $table->string('imagen_url', 255)->nullable();
        $table->unsignedBigInteger('proveedor_id');
        $table->integer('cantidad_stock')->default(0);
        
        $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('productos');
}
};
