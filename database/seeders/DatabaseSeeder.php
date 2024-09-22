<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsuariosTableSeeder::class,
            ProveedoresTableSeeder::class,
            ClientesTableSeeder::class,
            ProductosTableSeeder::class,
            EntradasTableSeeder::class,
            ReservasTableSeeder::class,
            SalidasTableSeeder::class,
        ]);
    }
}
