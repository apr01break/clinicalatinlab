<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuestrasExamenSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muestras_examen_solicitud', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('examen_solicitud_id')->unsigned();
            $table->foreign('examen_solicitud_id')->references('id')->on('examenes_solicitud');
            $table->integer('muestra_id')->unsigned();
            $table->foreign('muestra_id')->references('id')->on('muestras');
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
        Schema::dropIfExists('muestras_examen_solicitud');
    }
}
