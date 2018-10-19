<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeutAvoir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('peutavoir', function(Blueprint $table) {
            $table->foreign('cause_id')->references('id')->on('cause')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
        Schema::table('peutavoir', function(Blueprint $table) {
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
