<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas');
            $table->boolean('verificaHc');
            $table->datetime('fechaHsp');
            $table->boolean('condPago');
            $table->string('numero',20);
            $table->string('serie',20);
            $table->string('tipo',20);
            $table->decimal('igv',8,2);
            $table->decimal('pagoCon',8,2);
            $table->decimal('vuelto',8,2);
            $table->decimal('neto',8,2);
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
        Schema::dropIfExists('comprobantes');
    }
}
