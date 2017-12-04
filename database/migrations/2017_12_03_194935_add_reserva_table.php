<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('hora');
            $table->integer('cliente_tratamiento_id')->unsigned();
            $table->integer('sucursal_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->enum('estado', ['pendiente', 'realizada', 'cancelada'])->default('pendiente');
            $table->timestamps();

            $table->foreign('cliente_tratamiento_id')->references('id')->on('cliente_tratamiento');
            $table->foreign('sucursal_id')->references('id')->on('sucursal');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
