<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_statistics', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('IDJugador')->index('Player_Statistics_IDJugador_fkey');
            $table->integer('JuegosGanados');
            $table->integer('JuegosPerdidos');
            $table->double('Efectividad');
            $table->integer('JuegosLanzados');
            $table->integer('Aperturas');
            $table->integer('JuegosCompletados');
            $table->integer('JuegosBlanqueados');

            $table->unique(['id', 'IDJugador'], 'Player_Statistics_id_IDJugador_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_statistics');
    }
}
