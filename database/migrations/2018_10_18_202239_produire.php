<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('produire', function(Blueprint $table) {
            $table->foreign('consequence_id')->references('id')->on('consequence')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->string('quantite');
        });
        Schema::table('produire', function(Blueprint $table) {
            $table->foreign('evenement_id')->references('id')->on('evenement')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
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
