<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('oferta');
            $table->timestamps();
        });
         Schema::table('ofertas', function(Blueprint $table){
            $table->integer('fkusuario')->unsigned();
            $table->foreign('fkusuario')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('ofertas', function (Blueprint $table){
            $table->integer('fkarea')->unsigned();
            $table->foreign('fkarea')->references('id')->on('areas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ofertas');
    }
}
