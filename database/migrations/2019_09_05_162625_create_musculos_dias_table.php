<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusculosDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musculos_dias', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->integer('user_id');
            $table->integer('musculo_id');
            $table->boolean('d1')->default(false);
            $table->boolean('d2')->default(false);
            $table->boolean('d3')->default(false);
            $table->boolean('d4')->default(false);
            $table->boolean('d5')->default(false);
            $table->boolean('d6')->default(false);
            $table->boolean('d7')->default(false);
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
        Schema::dropIfExists('musculos_dias');
    }
}
