<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('psms',function($table){

            $table->create();
            $table->increments('id');
            $table->integer('categoria')->unsigned();
            $table->string('sexo',20);
            $table->string('publicacion',400);
            $table->integer('votos');
            $table->integer('sumavotos');
            $table->timestamps();

            $table->foreign('categoria')
              ->references('id')->on('categorias')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('psms');
    }
}
