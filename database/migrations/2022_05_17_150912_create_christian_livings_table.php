<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChristianLivingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('christian_livings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('designation_id');
            $table->tinyInteger('initial_song')->nullable();
            $table->string('part1')->nullable();
            $table->string('part1_manager', 40)->nullable();
            $table->string('part2')->nullable();
            $table->string('part2_manager', 40)->nullable();
            $table->string('part3')->nullable();
            $table->string('part3_manager', 40)->nullable();
            $table->string('bible_study')->nullable();
            $table->string('bible_study_manager', 40)->nullable();
            $table->tinyInteger('finish_song')->nullable();
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
        Schema::dropIfExists('christian_livings');
    }
}
