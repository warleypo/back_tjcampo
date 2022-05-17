<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMidweekMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midweek_meetings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('designation_id');
            $table->tinyInteger('initial_song', 3)->nullable();
            $table->string('president', 40)->nullable();
            $table->string('media_operator', 80)->nullable();
            $table->string('indicator', 40)->nullable();
            $table->string('microphones', 80)->nullable();
            $table->string('stage', 40)->nullable();
            $table->timestamps();

            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('midweek_meetings');
    }
}
