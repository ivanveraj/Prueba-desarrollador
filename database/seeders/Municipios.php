<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Municipios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert(
            [
                'id_municipio' => 1,
                'nombre_municipio' => 'Pamplona',
                'departamento_id' => 1
            ]
        );
        DB::table('municipios')->insert(
            [
                'id_municipio' => 2,
                'nombre_municipio' => 'Pamplonita',
                'departamento_id' => 1
            ]
        );
        DB::table('municipios')->insert(
            [
                'id_municipio' => 3,
                'nombre_municipio' => 'Bucaramanga',
                'departamento_id' => 2
            ]
        );
    }
}
