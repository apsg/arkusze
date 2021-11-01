<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('question_id');
            $table->foreign('question_id')
                ->references('id')
                ->on('questions');

            $table->unsignedInteger('test_id');
            $table->foreign('test_id')
                ->references('id')
                ->on('tests');

            $table->unsignedInteger('answer')->nullable();
            $table->unsignedInteger('value')->nullable();

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
        Schema::dropIfExists('answers');
    }
}
