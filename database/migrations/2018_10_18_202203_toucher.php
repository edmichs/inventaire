<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Toucher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('toucher', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('secteur_id')->unsigned();
            $table->foreign('secteur_id')->references('id')->on('secteur');
            $table->integer('evenement_id')->unsigned();
            $table->foreign('evenement_id')->references('id')->on('evenement');
                        // ->onDelete('cascade')
                        // ->onUpdate('cascade');
        });
        // Schema::table('toucher', function(Blueprint $table) {
        //     $table->integer('evenement_id')->unsigned();
        //     $table->foreign('evenement_id')->references('id')->on('evenement');
        //                 // ->onDelete('cascade')
        //                 // ->onUpdate('cascade');
        // });
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
