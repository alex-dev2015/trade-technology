<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsHasChampionshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants_has_championships', function (Blueprint $table) {
            $table->unsignedInteger('participants_id');
            $table->foreign('participants_id')->references('id')->on('participants');

            $table->unsignedInteger('championships_id');
            $table->foreign('championships_id')->references('id')->on('championships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants_has_championships');
    }
}
