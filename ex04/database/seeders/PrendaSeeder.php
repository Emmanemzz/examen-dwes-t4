<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //PRENDAS
        DB::table('prendas')->insert([
        [
            'nombre' => 'Blusa volantes',
            'descripcion' => 'Blusa de lino con volantes',
            'precio' => 17.00,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nombre' => 'Falda vaquera',
            'descripcion' => 'Mini falda vaquera de color azul',
            'precio' => 15.50,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nombre' => 'Botines de ante',
            'descripcion' => 'Botines cowboy que imitan la tela de ante',
            'precio' => 49.99,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
