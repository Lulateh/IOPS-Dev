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
    Schema::create('inventario', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('producto_id');
        $table->integer('cantidad');
        $table->integer('producto_reservado')->default(0);
        $table->enum('tipo_movimiento', ['entrada', 'salida']);
        $table->date('fecha_entrega')->nullable();
        $table->timestamp('fecha_movimiento')->useCurrent();
        $table->boolean('reporte_generado')->default(false);
        $table->timestamps();

        $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('inventario');
}
};
