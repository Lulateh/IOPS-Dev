<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('productos')->insert([
        'nombre' => 'Cigarros Pall Mall',
        'marca' => 'Pall Mall',
        'descripcion' => 'Cigarros doble click',
        'precio' => 1000.00,
        'imagen_url' => null,
        'proveedor_id' => 1,
        'cantidad_stock' => 150,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
}
