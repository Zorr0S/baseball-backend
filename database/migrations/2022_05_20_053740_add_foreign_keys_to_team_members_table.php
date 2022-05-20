<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->foreign(['EquipoID'], 'Team_Members_EquipoID_fkey')->references(['id'])->on('teams')->onUpdate('CASCADE');
            $table->foreign(['IDIntegrantes'], 'Team_Members_IDIntegrantes_fkey')->references(['id'])->on('credentials')->onUpdate('CASCADE');
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
            $table->dropForeign('Team_Members_EquipoID_fkey');
            $table->dropForeign('Team_Members_IDIntegrantes_fkey');
        });
    }
}
