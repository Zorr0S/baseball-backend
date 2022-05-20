<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMatchAnotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('match_anotations', function (Blueprint $table) {
            $table->foreign(['IDEquipo'], 'Match_Anotations_IDEquipo_fkey')->references(['id'])->on('teams')->onUpdate('CASCADE');
            $table->foreign(['IDJugador'], 'Match_Anotations_IDJugador_fkey')->references(['id'])->on('credentials')->onUpdate('CASCADE');
            $table->foreign(['IDPartido'], 'Match_Anotations_IDPartido_fkey')->references(['id'])->on('matches')->onUpdate('CASCADE');
            $table->foreign(['IDPosicion'], 'Match_Anotations_IDPosicion_fkey')->references(['id'])->on('positions')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('match_anotations', function (Blueprint $table) {
            $table->dropForeign('Match_Anotations_IDEquipo_fkey');
            $table->dropForeign('Match_Anotations_IDJugador_fkey');
            $table->dropForeign('Match_Anotations_IDPartido_fkey');
            $table->dropForeign('Match_Anotations_IDPosicion_fkey');
        });
    }
}
