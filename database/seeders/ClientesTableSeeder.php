<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre_cliente' => 'Cliente Prueba',
                'email' => 'cliente@prueba.com',
                'telefono' => '2690 0000',
                'direccion' => 'Calle 1, hasta el palo de mango',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
