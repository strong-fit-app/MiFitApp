<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjerciciosRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicios_registros', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->integer('user_id');
            $table->integer('musculo_id');
            $table->integer('ejercicio_id');
            $table->string('nombre');
            $table->integer('peso');
            $table->integer('series');
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
        Schema::dropIfExists('ejercicios_registros');
    }
}
