<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchAnotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_anotations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('IDPartido');
            $table->integer('IDEquipo')->index('Match_Anotations_IDEquipo_fkey');
            $table->integer('IDJugador')->index('Match_Anotations_IDJugador_fkey');
            $table->integer('IDPosicion')->index('Match_Anotations_IDPosicion_fkey');
            $table->integer('CarrerasAnotadas');
            $table->integer('HitsConectados');

            $table->unique(['IDPartido', 'IDEquipo', 'IDJugador', 'IDPosicion'], 'Match_Anotations_IDPartido_IDEquipo_IDJugador_IDPosicion_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_anotations');
    }
}
