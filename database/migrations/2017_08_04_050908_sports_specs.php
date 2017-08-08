<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SportsSpecs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports_specs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('points_for_win');
            $table->string('points_for_loss');
            $table->string('points_for_draw');
            $table->string('red_card');
            $table->string('yellow_card');
            $table->string('expulsions');
            $table->integer('sport_id')->unsigned();
            $table->foreign('sport_id')->references('id')->on('sports');
            $table->integer('roster_size');
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
        Schema::dropIfExists('sports_specs');
    }
}
