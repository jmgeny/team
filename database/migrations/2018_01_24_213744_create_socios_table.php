<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');//Si es un usuario registrado
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('dni')->unique();
            $table->integer('localidad_id');//Tabla ciudades
            $table->string('genero');
            $table->date('nacimiento');
            $table->string('estadoCivil');
            $table->string('amputado');//si o no
            $table->string('equipado');//si o no
            $table->string('obraSocial');//si o no 
            $table->integer('deporte_id');//Tabla deportes
            $table->integer('trabajo_id');
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
        Schema::dropIfExists('socios');
    }
}
