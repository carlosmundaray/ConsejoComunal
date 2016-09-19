<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensosAcademicoLaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censos_academico_laborals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grado_instrucion',50);
            $table->string('profesion');
            $table->string('trabaja',1);
            $table->string('pensionado',1);
            $table->string('institucion');
            $table->string('clasif_ingreso');
            $table->string('ingreso_mensual');
            $table->integer('censos_id')->unsigned();
            $table->foreign('censos_id')->references('id')->on('censos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('censos_academico_laborals');
    }
}
