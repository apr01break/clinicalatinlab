<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prNombre', 70);
            $table->string('sgNombre', 70);
            $table->string('aPaterno', 70);
            $table->string('aMaterno', 70);
            $table->date('fechaNacimiento');
            $table->integer('lugarNacimiento_id')->unsigned();
            $table->foreign('lugarNacimiento_id')->references('id')->on('distritos');
            $table->string('sexo', 70);
            $table->string('tipoDocum', 50);
            $table->string('nroDocum', 50);
            $table->string('direccion', 200)->nullable();
            $table->string('nroDirecc', 20)->nullable();
            $table->string('intDirecc', 20)->nullable();
            $table->string('mzaDirecc', 20)->nullable();
            $table->string('lotDirecc', 20)->nullable();
            $table->string('nroTelefono', 20)->nullable();
            $table->string('nroCelular', 20)->nullable();
            $table->string('nroTrabajo', 20)->nullable();
            $table->boolean('discapacitado');
            $table->string('tipoLocali', 70)->nullable();
            $table->string('nombLocali', 70)->nullable();
            $table->integer('residencia_id')->unsigned()->nullable();
            $table->foreign('residencia_id')->references('id')->on('distritos');
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
        Schema::dropIfExists('personas');
    }
}
