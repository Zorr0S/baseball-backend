<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->foreign(['EquipoVisitante'], 'Matches_EquipoVisitante_fkey')->references(['id'])->on('teams')->onUpdate('CASCADE');
            $table->foreign(['EquipoCasa'], 'Partido_EquipoCasa_fkey')->references(['id'])->on('teams')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->dropForeign('Matches_EquipoVisitante_fkey');
            $table->dropForeign('Partido_EquipoCasa_fkey');
        });
    }
}
