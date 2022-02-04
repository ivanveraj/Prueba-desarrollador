<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoTerceros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_terceros')->insert(
            [
                'id_tercero' => 1,
                'nombre_tipo_tercero' => 'Paciente'
            ]
        );
        DB::table('tipo_terceros')->insert(
            [
                'id_tercero' => 2,
                'nombre_tipo_tercero' => 'Empleado'
            ]
        );
        DB::table('tipo_terceros')->insert(
            [
                'id_tercero' => 3,
                'nombre_tipo_tercero' => 'Contratista'
            ]
        );
        DB::table('tipo_terceros')->insert(
            [
                'id_tercero' => 4,
                'nombre_tipo_tercero' => 'Otro'
            ]
        );
    }
}
