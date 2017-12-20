<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesOcupacionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes_ocupacionales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('empresa_id')->unsigned()->nullable();
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->string('ocupacion');
            $table->string('tipoEvaluacion1',100);
            $table->string('tipoEvaluacion2',100);
            $table->date('fechaEvaluacion');
            $table->boolean('residenciaOcupacion');
            $table->string('tiempoResidencia');
            $table->string('seguro');
            $table->string('email');
            $table->string('estadoCivil');
            $table->string('gradoInstruccion');
            $table->integer('nroHijosVivos');
            $table->integer('nroDependientes');
            $table->integer('estado');
            $table->string('nombreUsuario', 120)->nullable();
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
        Schema::dropIfExists('pacientes_ocupacionales');
    }
}
