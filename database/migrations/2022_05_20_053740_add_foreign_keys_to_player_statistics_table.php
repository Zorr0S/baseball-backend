<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPlayerStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_statistics', function (Blueprint $table) {
            $table->foreign(['IDJugador'], 'Player_Statistics_IDJugador_fkey')->references(['id'])->on('credentials')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_statistics', function (Blueprint $table) {
            $table->dropForeign('Player_Statistics_IDJugador_fkey');
        });
    }
}
