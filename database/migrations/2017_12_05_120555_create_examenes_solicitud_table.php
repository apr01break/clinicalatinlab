<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes_solicitud', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('examen_id')->unsigned();
            $table->foreign('examen_id')->references('id')->on('examenes');
            $table->integer('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')->references('id')->on('solicitudes');
            $table->integer('trabajador_id')->unsigned();
            $table->foreign('trabajador_id')->references('id')->on('trabajadores');
            $table->string('resultado',300);
            $table->string('descripcion',400);
            $table->string('unidad',200);
            $table->string('rango',200);
            $table->string('comentario',500);
            $table->integer('comprobante_id')->unsigned()->nullable();
            $table->foreign('comprobante_id')->references('id')->on('comprobantes');
            $table->string('nombreUsuario',200);
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
        Schema::dropIfExists('examenes_solicitud');
    }
}
