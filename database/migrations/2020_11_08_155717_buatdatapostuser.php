<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Buatdatapostuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapembeli', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nohp',255);
            $table->string('provider');
            $table->integer('id_nominal')->unsigned();
            $table->string('status');
            $table->timestamps();
            
            $table->foreign('provider')->references('provider')->on('dataprovider');
            $table->foreign('id_nominal')->references('nominal')->on('nominal');

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
