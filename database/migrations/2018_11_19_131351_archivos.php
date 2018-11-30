<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Archivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos',function(Blueprint $archivos){
            $archivos->increments('id');
            $archivos->string('url');
            $archivos->unsignedInteger('id_publicacion');
            $archivos->foreign('id_publicacion')->references('id')->on('publicaciones');
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
