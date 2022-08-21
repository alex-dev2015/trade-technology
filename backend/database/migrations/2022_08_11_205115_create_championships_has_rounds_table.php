<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampionshipsHasRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championships_has_rounds', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('championships_id');
            $table->foreign('championships_id')->references('id')->on('championships');

            $table->unsignedInteger('rounds_id');
            $table->foreign('rounds_id')->references('id')->on('rounds');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('championships_has_rounds');
    }
}
