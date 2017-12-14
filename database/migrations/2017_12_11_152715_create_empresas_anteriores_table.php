<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasAnterioresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas_anteriores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_ocupacional_id')->unsigned();
            $table->foreign('paciente_ocupacional_id')->references('id')->on('pacientes_ocupacionales');
            $table->string('nombre');
            $table->string('areaTrabajo');
            $table->string('ocupacion');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('exposicion');
            $table->string('epp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas_anteriores');
    }
}
