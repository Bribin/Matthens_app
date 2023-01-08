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
        Schema::create('exam_questions', function (Blueprint $table) {
            $table->id()->from('100');
            $table->string('ExamCode');
            $table->string('PaperCode');
            $table->string('SectionCode');
            $table->string('ExamSubjectCode');
            $table->string('ExamLanguage');
            $table->string('DifficultyLevel');
            $table->string('AccountType');
            $table->string('IsQuestionBlob');
            $table->text('Description')->nullable();
            $table->binary('BlobDescription');
            $table->string('QuestionPath');
            $table->integer('SortOrder')->default('0');
            $table->string('PreviousYearCode')->nullable();
            $table->bigInteger('CreatedUser')->unsigned()->index();
            $table->foreign(['ExamCode','PaperCode'])->references(['ExamCode','PaperCode'])->on('exam_papers')->onDelete('cascade');
            $table->foreign('CreatedUser')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_questions');
    }
};
