<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->string('email');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('descripcion');
            $table->date('nacimiento');
            $table->string('facebook')->default('https://www.facebook.com/juanmageny');
            $table->string('twiter')->default('https://twitter.com/paratriatlon');
            $table->string('instagram')->default('https://www.instagram.com/juanmanuelgeny');                        
            $table->string('avatar')->default('img/avatar/profile.jpg');
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
        Schema::dropIfExists('atletas');
    }
}
