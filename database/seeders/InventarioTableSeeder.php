<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('inventario')->insert([
        'producto_id' => 2,
        'cantidad' => 50,
        'tipo_movimiento' => 'entrada',
        'producto_reservado' => 10,
        'fecha_entrega' => now(),
        'reporte_generado' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
}
