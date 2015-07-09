<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->increments('id_tarea');
            $table->string('Descripcion');
            $table->date('fechaEntrega');
            $table->integer('id_proyecto')->unsigned();
            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->integer('id_estatus')->unsigned();
            $table->foreign('id_estatus')->references('id_estatus')->on('estatus');
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
        //
    }
}
