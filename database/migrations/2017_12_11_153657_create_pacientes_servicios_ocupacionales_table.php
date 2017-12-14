<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesServiciosOcupacionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes_servicios_ocupacionales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_ocupacional_id')->unsigned();
            $table->foreign('paciente_ocupacional_id')->references('id')->on('pacientes_ocupacionales');
            $table->integer('servicio_ocupacional_id')->unsigned();
            $table->foreign('servicio_ocupacional_id')->references('id')->on('servicios_ocupacionales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes_servicios_ocupacionales');
    }
}
