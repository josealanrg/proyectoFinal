<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRequirements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) {
            $table->increments('id_requisito');
            $table->string('Descripcion');->unique();
            $table->integer('id_proyecto')->unsigned();
            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos');
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
