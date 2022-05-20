<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPlaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plays', function (Blueprint $table) {
            $table->foreign(['jugada'], 'Plays_jugada_fkey')->references(['id'])->on('play_types')->onUpdate('CASCADE');
            $table->foreign(['MatchAnotationID'], 'Plays_MatchAnotationID_fkey')->references(['id'])->on('match_anotations')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plays', function (Blueprint $table) {
            $table->dropForeign('Plays_jugada_fkey');
            $table->dropForeign('Plays_MatchAnotationID_fkey');
        });
    }
}
