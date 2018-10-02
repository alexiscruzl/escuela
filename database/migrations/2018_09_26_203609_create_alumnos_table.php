<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');//autoincrementable
            $table->string('nombre'); // varchar
            $table->integer('codigo')->unsigned(); //entro sin signo 
            $table->string('carrera');//varchar 
            $table->rememberToken();//recuerda los archicos ingresados
            $table->timestamps();//marca los tiempos en que fueron creados o eliminados
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
