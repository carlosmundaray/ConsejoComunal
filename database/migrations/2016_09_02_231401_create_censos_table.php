<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nacionalidad',50);
            $table->string('cedula');
            $table->string('name', 100);
            $table->date('fecha_nac');
            $table->string('sexo',50);
            $table->string('estado_civil',50);
            $table->string('telf_celular',20);
            $table->string('telf_casa',20);
            $table->string('telf_ofic',20);
            $table->string('email');
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
        Schema::drop('censos');
    }
}
