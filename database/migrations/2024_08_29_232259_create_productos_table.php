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
        $table->decimal('precio_venta', 10, 2);
        $table->decimal('precio_compra', 10, 2);
        $table->date('fecha_vencimiento', 100);
        $table->string('imagen_url', 255)->nullable();
        $table->string('ubicacion_bodega', 100);
        $table->integer('cantidad_stock')->default(0);
        
        
        
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('productos');
}
};
