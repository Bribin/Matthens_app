<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_answers', function (Blueprint $table) {
            $table->id()->from('100');
            $table->bigInteger('ExamQuestionID')->unsigned()->index();
            $table->string('Option');
            $table->string('Answer');
            $table->binary('BlobAnswer');
            $table->string('AnswerPath');
            $table->string('IsCorrectAnswer');
            $table->text('Description');
            $table->integer('SortOrder')->default('0');
            $table->bigInteger('CreatedUser')->unsigned()->index();
            $table->foreign('ExamQuestionID')->references('id')->on('exam_questions')->onDelete('cascade');
            $table->foreign('CreatedUser')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('exam_answers');
    }
};
