<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservas')->insert([
            [
                'cantidad_reservas' => 20,
                'fecha_salida' => '2021-12-31',
                'estado' => 'reservado',
                'created_at' => now(),
                'updated_at' => now(),
                'cliente_id' => 1,
                'producto_id' => 1,
            ],
        ]);
    }
}
