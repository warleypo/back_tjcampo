<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCleaningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleanings', function (Blueprint $table) {
            $table->id();
            $table->date('day_clean');
            $table->tinyText('brothers');
            $table->unsignedBigInteger('congregation_id');
            $table->timestamps();

            $table->foreign('congregation_id')->references('id')->on('congregations')->onDelete('restrict');
            $table->unique(['day_clean', 'congregation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cleanings');
    }
}
