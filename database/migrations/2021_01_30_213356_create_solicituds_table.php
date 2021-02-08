<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            //Atributos
            $table->id();
            $table->string('asunto');
            $table->string('trabajo');
            $table->string('motivo');
            $table->string('equipo');
            $table->string('descripcion');
            $table->string('estado');
            $table->unsignedBigInteger('id_tecnico');

            //Llave foranea 
            $table->foreign('id_tecnico')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicituds');
    }
}
