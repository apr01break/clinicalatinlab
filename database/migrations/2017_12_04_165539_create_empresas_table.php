<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 200);
            $table->string('abreviatura', 200)->nullable();
            $table->boolean('veterinaria')->nullable();
            $table->string('giroNegocio', 200)->nullable();
            $table->string('ruc', 50)->nullable();
            $table->string('contacto', 200)->nullable();
            $table->string('grupo', 200)->nullable();
            $table->string('atencion', 200)->nullable();
            $table->date('fechaConsti')->nullable();
            $table->date('fechaAniver')->nullable();
            $table->string('cargo', 200)->nullable();
            $table->string('direccion', 300)->nullable();
            $table->integer('distrito_id')->unsigned()->nullable();
            $table->foreign('distrito_id')->references('id')->on('distritos');
            $table->string('email', 100)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('anexo', 100)->nullable();
            $table->string('fax', 100)->nullable();
            $table->string('homePage', 200)->nullable();
            $table->string('observacion', 400)->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
