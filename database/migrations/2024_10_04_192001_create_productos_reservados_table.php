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
        Schema::create('productos_reservados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('producto_id')->constrained('productos');
            $table->foreignId('reservas_id')->constrained('reservas');
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_reservados');
    }
};
