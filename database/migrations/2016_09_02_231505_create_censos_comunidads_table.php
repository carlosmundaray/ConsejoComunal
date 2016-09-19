<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensosComunidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censos_comunidads', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nomb_comunidad');
            $table->integer('estado_id');
            $table->integer('municipios_id');
            $table->integer('parroquia_id');
            $table->text('sector');
            $table->text('direccion');
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
        Schema::drop('censos_comunidads');
    }
}
