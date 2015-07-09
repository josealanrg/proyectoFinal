<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('usuario');->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('id_tipoUsuario')->unsigned();
            $table->foreign('id_tipoUsuario')->references('id_tipoUsuario')->on('tiposUsuarios');
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
         Schema::drop('users');
    }
}
