<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'username' => 'ZM93',
            'primer_nombre' => 'Manuel',
            'segundo_nombre' => 'Omar',
            'primer_apellido' => 'Zepeda',
            'segundo_apellido' => 'Machuca',
            'id_rol' => 1,
            'password' => Crypt::encrypt('123456789'),
        ]);

        DB::table('usuarios')->insert([
            'username' => 'ZM01',
            'primer_nombre' => 'Rene',
            'segundo_nombre' => 'Alexander',
            'primer_apellido' => 'Zepeda',
            'segundo_apellido' => 'Machuca',
            'id_rol' => 2,
            'password' => Crypt::encrypt('123abc'),
        ]);
    }
}
