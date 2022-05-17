<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('congregation_id');
            $table->date('day_cart');
            $table->tinyText('brothers');
            $table->time('horary')->nullable();
            $table->string('horary_str', 30)->nullable();
            $table->string('local')->nullable();
            $table->timestamps();

            $table->foreign('congregation_id')->references('id')->on('congregations')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
