<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntradasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entradas')->insert([
            [
                'cantidad_entrada' => 30,
                'created_at' => now(),
                'updated_at' => now(),
                'producto_id' => 1,
                'proveedor_id' => 1,
            ],
        ]);
    }
}
