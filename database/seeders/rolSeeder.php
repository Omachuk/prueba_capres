<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rol')->insert([
            'rol' => 'Administrador',
            'descripcion' => 'Es el super usuario que administrara todo',
        ]);

        DB::table('rol')->insert([
            'rol' => 'vendedor',
            'descripcion' => 'Es perfil de vendedor',
        ]);
    }
}
