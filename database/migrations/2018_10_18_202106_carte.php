<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('carte', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idregion')->index();
            $table->integer('iddepartement')->index();
            $table->integer('idlocalite')->index();
            $table->integer('longitude');
            $table->integer('latitude');
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
        Schema::dropIfExists('carte');
    }
}
