<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTorneosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->integer('idTorneo', true);
            $table->integer('idLocal')->comment('ID del Equipo Local');
            $table->integer('idVisitante')->comment('ID del Equipo Visitante');
            $table->integer('idCategoria');
            $table->integer('idGenero');
            $table->integer('idTipo');
            $table->integer('idCiudad');
            $table->integer('idLugar');
            $table->date('fecha');
            $table->time('horario');
            $table->string('administradores');
            $table->string('arbitros');
            $table->string('entrenadores');
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
        Schema::dropIfExists('torneos');
    }
}
