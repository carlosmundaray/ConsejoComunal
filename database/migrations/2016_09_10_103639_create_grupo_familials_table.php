<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoFamilialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_familials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula');
            $table->string('name', 100);
            $table->date('fecha_nac');
            $table->string('sexo',50);
            $table->string('discapasidad', 1);
            $table->string('tipo_discapasidad',100);
            $table->string('embarazo_templano',1);
            $table->string('parentesco',50);
            $table->string('grado_instrucion',100);
            $table->string('profesion',100);
            $table->string('pensionado', 1);
            $table->string('ingreso_mensual',100);
            $table->integer('censos_id')->unsigned();
            $table->foreign('censos_id')->references('id')->on('censos')->onDelete('cascade');
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
        Schema::drop('grupo_familials');
    }
}
