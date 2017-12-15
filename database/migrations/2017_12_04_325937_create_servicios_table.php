<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 100);
            $table->string('breveTarifa', 200);
            $table->integer('sub_clase_id')->unsigned()->nullable();
            $table->foreign('sub_clase_id')->references('id')->on('sub_clases');
            $table->integer('unidad_medida_id')->unsigned()->nullable();
            $table->foreign('unidad_medida_id')->references('id')->on('unidades_medida');
            $table->integer('area_id')->unsigned()->nullable();
            $table->foreign('area_id')->references('id')->on('areas');
            $table->string('importeBase', 100)->nullable();
            $table->boolean('veterinaria')->nullable();
            $table->boolean('categSocial')->nullable();
            $table->boolean('categTemporal')->nullable();
            $table->boolean('tarifaLibre')->nullable();
            $table->string('estadoAtencion', 100)->nullable();
            $table->boolean('igv')->nullable();
            $table->integer('tipo_ayd_diag_id')->unsigned()->nullable();
            $table->foreign('tipo_ayd_diag_id')->references('id')->on('tipo_ayd_diags');
            $table->integer('cpt_id')->unsigned()->nullable();
            $table->foreign('cpt_id')->references('id')->on('cpts');
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
        Schema::dropIfExists('servicios');
    }
}
