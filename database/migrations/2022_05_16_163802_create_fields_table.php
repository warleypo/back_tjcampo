<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('congregation_id');
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('manager_id');
            $table->date('day_field');
            $table->string('local')->default('Não definido');
            $table->time('horary');
            $table->tinyText('notes')->nullable();
            $table->timestamps();

            $table->foreign('congregation_id')->references('id')->on('congregations')->onDelete('restrict');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('restrict');
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('restrict');

            $table->unique(['day_field', 'horary', 'congregation_id', 'group_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fields');
    }
}
