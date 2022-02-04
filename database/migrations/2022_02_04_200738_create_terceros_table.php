<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTercerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terceros', function (Blueprint $table) {
            $table->id('id_tercero')->autoIncrement();
            $table->unsignedBigInteger('tipoidentificacion_tercero');
            $table->foreign('tipoidentificacion_tercero')->references('id_tipoidentificacion')
                ->on('tipo_identificacions');
            $table->integer('numeroidentificacion_tercero');
            $table->unsignedBigInteger('tipo_tercero');
            $table->foreign('tipo_tercero')->references('id_tercero')
                ->on('tipo_terceros');
            $table->string('primernombre_tercero');
            $table->string('segundonombre_tercero');
            $table->string('primerapellido_tercero');
            $table->string('segundoapellido_tercero');
            $table->unsignedBigInteger('departamento_id');
            $table->foreign('departamento_id')->references('id_departamento')
                ->on('departamentos');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id_municipio')
                ->on('municipios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terceros');
    }
}
