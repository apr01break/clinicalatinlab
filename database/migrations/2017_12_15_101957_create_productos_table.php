<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',300);
            $table->string('codigo',300);
            $table->string('descripcion',300)->nullable();
            $table->integer('unidad_medida_id')->unsigned()->nullable();
            $table->foreign('unidad_medida_id')->references('id')->on('unidades_medida');
            $table->datetime('fechaProduccion');
            $table->datetime('fechaVencimiento');
            $table->datetime('fechaInicio');
            $table->datetime('fechaFin');
            $table->integer('estado');
            $table->string('nombreUsuario');
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
        Schema::dropIfExists('productos');
    }
}
