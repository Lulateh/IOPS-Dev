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
    Schema::create('reportes', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('producto_id');
        $table->integer('cantidad_entradas');
        $table->integer('cantidad_salidas');
        $table->enum('tipo_reporte', ['diario', 'semanal', 'mensual']);
        $table->date('fecha_inicio');
        $table->date('fecha_fin');
        $table->timestamps();

        $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('reportes');
}
};
