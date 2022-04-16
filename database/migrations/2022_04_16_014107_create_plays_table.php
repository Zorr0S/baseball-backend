<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plays', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('jugada')->index('Plays_jugada_fkey');
            $table->integer('MatchAnotationID')->index('Plays_MatchAnotationID_fkey');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plays');
    }
}
