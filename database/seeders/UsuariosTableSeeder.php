<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('usuarios')->insert([
        'nombre' => 'Admin',
        'nombre_empresa' => 'Pruebas S.A.',
        'email' => 'pruebas@gmail.com',
        'password' => bcrypt('1234'),
        'rol' => 'administrador',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
}