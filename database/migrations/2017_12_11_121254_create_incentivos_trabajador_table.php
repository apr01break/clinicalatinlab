<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncentivosTrabajadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incentivos_trabajador', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sueldo_id')->unsigned();
            $table->foreign('sueldo_id')->references('id')->on('sueldos');
            $table->integer('incentivo_id')->unsigned();
            $table->foreign('incentivo_id')->references('id')->on('incentivos');
            $table->double('montoIncentivo',8,2);
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
        Schema::dropIfExists('incentivos_trabajador');
    }
}
