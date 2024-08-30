<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('proveedores')->insert([
        'nombre' => 'Proveedor Prueba',
        'direccion' => 'Esparza, Nances',
        'telefono' => '123456789',
        'email' => 'proveedor@gmail.com',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
}
