<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('salidas')->insert([
            [
                'cantidad_salida' => 30,
                'created_at' => now(),
                'updated_at' => now(),
                'producto_id' => 1,
                'cliente_id' => 1,
            ],
        ]);
    }
}
