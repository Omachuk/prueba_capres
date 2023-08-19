<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'primer_nombre' => 'Jairo',
            'segundo_nombre' => 'José',
            'primer_apellido' => 'Machuca',
            'segundo_apellido' => 'Perez',
            'dui' => '12345678-9',
            'fecha_nacimientos' => '1999-02-22',
        ]);

        DB::table('clientes')->insert([
            'primer_nombre' => 'Gerardo',
            'segundo_nombre' => 'Javier',
            'primer_apellido' => 'Rodriguez',
            'segundo_apellido' => 'Machuca',
            'dui' => '12345678-7',
            'fecha_nacimientos' => '1987-05-10',
        ]);
    }
}
