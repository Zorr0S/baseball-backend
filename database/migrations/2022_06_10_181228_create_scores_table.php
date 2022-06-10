<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->integer('idJugador')->primary();
            $table->integer('idEquipo');
            $table->integer('nombre');
            $table->integer('AB')->default(0);
            $table->integer('H')->default(0);
            $table->integer('twoB')->default(0);
            $table->integer('threeB')->default(0);
            $table->integer('HR')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
