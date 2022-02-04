<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoIdentificacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_identificacions')->insert(
            [
                'id_tipoidentificacion' => 1,
                'nombre_tipoidentificacion' => 'Cedula de ciudadania'
            ]
        );
        DB::table('tipo_identificacions')->insert(
            [
                'id_tipoidentificacion' => 2,
                'nombre_tipoidentificacion' => 'NIT'
            ]
        );
    }
}
