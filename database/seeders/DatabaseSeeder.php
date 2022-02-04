<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TipoTerceros::class);
        $this->call(TipoIdentificacion::class);
        $this->call(Departamentos::class);
        $this->call(Municipios::class);
    }
}
