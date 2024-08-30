<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('reportes')->insert([
        'producto_id' => 1,
        'cantidad_entradas' => 50,
        'cantidad_salidas' => 0,
        'tipo_reporte' => 'diario',
        'fecha_inicio' => now()->startOfDay(),
        'fecha_fin' => now()->endOfDay(),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
}
