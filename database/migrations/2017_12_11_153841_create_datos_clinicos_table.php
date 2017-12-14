<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosClinicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_clinicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_ocupacional_id')->unsigned();
            $table->foreign('paciente_ocupacional_id')->references('id')->on('pacientes_ocupacionales');
            $table->string('tipoEvaluacion1',100);
            $table->string('tipoEvaluacion2',100);
            $table->date('fechaEvaluacion');
            $table->integer('edad');
            $table->decimal('talla',3,2);
            $table->integer('peso');
            $table->decimal('imc',4,2);
            $table->string('perAbd',20);
            $table->string('frecResp',20);
            $table->string('frecCard',20);
            $table->string('pa',20);
            $table->string('temperatura',20);
            $table->string('visLejosOdSc',20);
            $table->string('visLejosOdCc',20);
            $table->string('visLejosOiSc',20);
            $table->string('visLejosOiCc',20);
            $table->string('visCercaOdSc',20);
            $table->string('visCercaOdCc',20);
            $table->string('visCercaOiSc',20);
            $table->string('visCercaOiCc',20);
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
        Schema::dropIfExists('datos_clinicos');
    }
}
