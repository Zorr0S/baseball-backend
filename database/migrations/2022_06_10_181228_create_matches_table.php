<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->integer('idMatch', true);
            $table->string('TorneoName');
            $table->integer('idTorneo');
            $table->string('CasaName');
            $table->integer('EquipoCasa');
            $table->string('VisitanteName');
            $table->integer('EquipoVisitante');
            $table->integer('EquipoGanador')->nullable();
            $table->string('fecha');
            $table->string('horario');
            $table->integer('casaScore')->default(0);
            $table->integer('visitaScore')->default(0);
            $table->boolean('estatus')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
