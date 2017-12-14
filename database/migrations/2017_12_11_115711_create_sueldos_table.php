<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSueldosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sueldos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trabajador_id')->unsigned();
            $table->foreign('trabajador_id')->references('id')->on('trabajadores');
            $table->integer('razon_financiera_id')->unsigned();
            $table->foreign('razon_financiera_id')->references('id')->on('razones_financieras');
            $table->double('montoBase',8,2);
            $table->integer('cantidadServicios');
            $table->double('montoTotalPorServicios',8,2);
            $table->string('estadoDePago',200);
            $table->date('fecha');
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
        Schema::dropIfExists('sueldos');
    }
}
