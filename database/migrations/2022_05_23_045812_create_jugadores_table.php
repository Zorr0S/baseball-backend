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
            $table->string('imagen');
            $table->string('nombre');
            $table->string('bateo');
            $table->string('lanzamiento');
            $table->string('edad');
            $table->string('estatura');
            $table->string('peso');
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
        Schema::dropIfExists('jugadores');
    }
}
