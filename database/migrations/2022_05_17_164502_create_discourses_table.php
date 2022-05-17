<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discourses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('congregation_id');
            $table->date('day_discourse');
            $table->tinyText('theme');
            $table->string('orator', 40);
            $table->string('details')->nullable();
            $table->timestamps();

            $table->foreign('congregation_id')->references('id')->on('congregations')->onDelete('restrict');
            $table->unique(['day_discourse', 'congregation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discourses');
    }
}
