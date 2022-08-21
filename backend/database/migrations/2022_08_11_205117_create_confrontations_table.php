<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfrontationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confrontations', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('participant_A');
            $table->foreign('participant_A')->references('id')->on('participants');

            $table->unsignedInteger('participant_B');
            $table->foreign('participant_B')->references('id')->on('participants');

            $table->unsignedInteger('championships_rounds_id');
            $table->foreign('championships_rounds_id')->references('id')->on('championships_has_rounds');
            $table->unsignedInteger('status')->default(0);
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
        Schema::dropIfExists('confrontations');
    }
}
