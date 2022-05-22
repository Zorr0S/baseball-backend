<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credentials', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('Nombre', 191);
            $table->string('Apellidos', 191);
            $table->integer('IDTipoJugador')->index('Credentials_IDTipoJugador_fkey');
            $table->string('correo', 191)->unique('credentials_correo_key');
        });

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::create('match_anotations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('IDPartido');
            $table->integer('IDEquipo')->index('match_anotations_IDEquipo_fkey');
            $table->integer('IDJugador')->index('match_anotations_IDJugador_fkey');
            $table->integer('IDPosicion')->index('match_anotations_IDPosicion_fkey');
            $table->integer('CarrerasAnotadas');
            $table->integer('HitsConectados');

            $table->unique(['IDPartido', 'IDEquipo', 'IDJugador', 'IDPosicion'], 'match_anotations_IDPartido_IDEquipo_IDJugador_IDPosicion_key');
        });

        Schema::create('matches', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('idTorneo')->index('matches_idTorneo_fkey');
            $table->string('Nombre', 191);
            $table->integer('EquipoCasa')->index('matches_EquipoCasa_fkey');
            $table->integer('EquipoVisitante')->index('matches_EquipoVisitante_fkey');
            $table->integer('EquipoGanador')->nullable()->index('matches_EquipoGanador_fkey');
            $table->boolean('estatus');
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tokenable_type');
            $table->unsignedBigInteger('tokenable_id');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();

            $table->index(['tokenable_type', 'tokenable_id']);
        });

        Schema::create('play_types', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('Nombre', 191);
        });

        Schema::create('player_statistics', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('IDJugador')->unique('player_statistics_IDJugador_key');
            $table->integer('JuegosGanados');
            $table->integer('JuegosPerdidos');
            $table->double('Efectividad');
            $table->integer('JuegosLanzados');
            $table->integer('Aperturas');
            $table->integer('JuegosCompletados');
            $table->integer('JuegosBlanqueados');
        });

        Schema::create('playertype', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('Nombre', 191);
        });

        Schema::create('plays', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('jugada')->index('plays_jugada_fkey');
            $table->integer('MatchAnotationID')->index('plays_MatchAnotationID_fkey');
        });

        Schema::create('positions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 191);
        });

        Schema::create('team_members', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('EquipoID')->index('team_members_EquipoID_fkey');
            $table->integer('IDIntegrantes')->index('team_members_IDIntegrantes_fkey');
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('Nombre', 191);
        });

        Schema::create('tournaments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('idCategoria');
            $table->integer('idGenero');
            $table->integer('idTipo');
            $table->integer('idCiudad');
            $table->integer('administradores');
            $table->boolean('estatus');
            $table->integer('participantes');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('credentials', function (Blueprint $table) {
            $table->foreign(['IDTipoJugador'], 'Credentials_IDTipoJugador_fkey')->references(['id'])->on('playertype')->onUpdate('CASCADE');
        });

        Schema::table('match_anotations', function (Blueprint $table) {
            $table->foreign(['IDEquipo'], 'match_anotations_IDEquipo_fkey')->references(['id'])->on('teams')->onUpdate('CASCADE');
            $table->foreign(['IDJugador'], 'match_anotations_IDJugador_fkey')->references(['id'])->on('credentials')->onUpdate('CASCADE');
            $table->foreign(['IDPartido'], 'match_anotations_IDPartido_fkey')->references(['id'])->on('matches')->onUpdate('CASCADE');
            $table->foreign(['IDPosicion'], 'match_anotations_IDPosicion_fkey')->references(['id'])->on('positions')->onUpdate('CASCADE');
        });

        Schema::table('matches', function (Blueprint $table) {
            $table->foreign(['EquipoCasa'], 'matches_EquipoCasa_fkey')->references(['id'])->on('teams')->onUpdate('CASCADE');
            $table->foreign(['EquipoGanador'], 'matches_EquipoGanador_fkey')->references(['id'])->on('teams')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['EquipoVisitante'], 'matches_EquipoVisitante_fkey')->references(['id'])->on('teams')->onUpdate('CASCADE');
            $table->foreign(['idTorneo'], 'matches_idTorneo_fkey')->references(['id'])->on('tournaments')->onUpdate('CASCADE');
        });

        Schema::table('player_statistics', function (Blueprint $table) {
            $table->foreign(['IDJugador'], 'Player_Statistics_IDJugador_fkey')->references(['id'])->on('credentials')->onUpdate('CASCADE');
        });

        Schema::table('plays', function (Blueprint $table) {
            $table->foreign(['jugada'], 'plays_jugada_fkey')->references(['id'])->on('play_types')->onUpdate('CASCADE');
            $table->foreign(['MatchAnotationID'], 'plays_MatchAnotationID_fkey')->references(['id'])->on('match_anotations')->onUpdate('CASCADE');
        });

        Schema::table('team_members', function (Blueprint $table) {
            $table->foreign(['EquipoID'], 'team_members_EquipoID_fkey')->references(['id'])->on('teams')->onUpdate('CASCADE');
            $table->foreign(['IDIntegrantes'], 'team_members_IDIntegrantes_fkey')->references(['id'])->on('credentials')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->dropForeign('team_members_EquipoID_fkey');
            $table->dropForeign('team_members_IDIntegrantes_fkey');
        });

        Schema::table('plays', function (Blueprint $table) {
            $table->dropForeign('plays_jugada_fkey');
            $table->dropForeign('plays_MatchAnotationID_fkey');
        });

        Schema::table('player_statistics', function (Blueprint $table) {
            $table->dropForeign('Player_Statistics_IDJugador_fkey');
        });

        Schema::table('matches', function (Blueprint $table) {
            $table->dropForeign('matches_EquipoCasa_fkey');
            $table->dropForeign('matches_EquipoGanador_fkey');
            $table->dropForeign('matches_EquipoVisitante_fkey');
            $table->dropForeign('matches_idTorneo_fkey');
        });

        Schema::table('match_anotations', function (Blueprint $table) {
            $table->dropForeign('match_anotations_IDEquipo_fkey');
            $table->dropForeign('match_anotations_IDJugador_fkey');
            $table->dropForeign('match_anotations_IDPartido_fkey');
            $table->dropForeign('match_anotations_IDPosicion_fkey');
        });

        Schema::table('credentials', function (Blueprint $table) {
            $table->dropForeign('Credentials_IDTipoJugador_fkey');
        });

        Schema::dropIfExists('users');

        Schema::dropIfExists('tournaments');

        Schema::dropIfExists('teams');

        Schema::dropIfExists('team_members');

        Schema::dropIfExists('positions');

        Schema::dropIfExists('plays');

        Schema::dropIfExists('playertype');

        Schema::dropIfExists('player_statistics');

        Schema::dropIfExists('play_types');

        Schema::dropIfExists('personal_access_tokens');

        Schema::dropIfExists('password_resets');

        Schema::dropIfExists('matches');

        Schema::dropIfExists('match_anotations');

        Schema::dropIfExists('failed_jobs');

        Schema::dropIfExists('credentials');
    }
}
