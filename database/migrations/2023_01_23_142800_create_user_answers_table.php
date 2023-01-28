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
        Schema::create('user_answers', function (Blueprint $table) {
            $table->integer('id')->from('100')->unique();
            $table->string('UserAnswerID');
            $table->string('ExamCode');
            $table->string('PaperCode');
            $table->bigInteger('UserID')->unsigned()->index();
            $table->json('Answer');
            $table->dateTime('ExamStartTime');
            $table->dateTime('ExamEndTime');
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['UserAnswerID','ExamCode','PaperCode']);
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('ExamCode','PaperCode')->references('ExamCode')->on('exams')->onDelete('cascade');
            $table->foreign(['ExamCode','PaperCode'])->references(['ExamCode','PaperCode'])->on('exam_papers')->onDelete('cascade');


        });

        Schema::table('user_answers', function (Blueprint $table) {
            $table->integer('id', 50)->autoIncrement()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_answers');
    }
};
