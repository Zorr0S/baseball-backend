<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->integer('idJugador', true);
            $table->integer('idEquipo');
            $table->integer('idTipo');
            $table->integer('jersey');
            $table->string('nombre');
            $table->string('bateo');
            $table->string('lanzamiento');
            $table->date('nacimiento')->nullable();
            $table->boolean('estatus')->default(true);
            $table->integer('AB')->nullable()->default(0);
            $table->integer('H')->nullable()->default(0);
            $table->integer('twoB')->nullable()->default(0);
            $table->integer('threeB')->nullable()->default(0);
            $table->integer('HR')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
}
