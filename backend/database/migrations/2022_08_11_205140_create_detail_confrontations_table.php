<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailConfrontationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_confrontations', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('confrontation_id');
            $table->foreign('confrontation_id')->references('id')->on('confrontations');

            $table->unsignedInteger('time_victory');
            $table->unsignedInteger('time_defeat');
            $table->unsignedInteger('goal_time_A');
            $table->unsignedInteger('goal_time_B');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_confrontations');
    }
}
