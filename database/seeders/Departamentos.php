<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Departamentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert(
            [
                'id_departamento' => 1,
                'nombre_departamento' => 'Norte de santander'
            ]
        );
        DB::table('departamentos')->insert(
            [
                'id_departamento' => 2,
                'nombre_departamento' => 'Santander'
            ]
        );
    }
}
