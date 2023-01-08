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
        Schema::create('exam_papers', function (Blueprint $table) {
            $table->integer('id')->from('100')->unique();
            $table->string('ExamCode');
            $table->string('PaperCode');
            $table->string('Name');
            $table->text('Description')->nullable();
            $table->string('IsActive')->default('Y')->nullable();
            $table->string('IsnegativeApplicable')->nullable()->default('N');
            $table->integer('NoofQuestions')->nullable();
            $table->integer('MinQuestionstoAnswer')->nullable();
            $table->float('CorrectMark')->nullable();
            $table->float('NegativeMark')->nullable();
            $table->float('UnattendedMark')->nullable();
            $table->float('CutOffMark')->nullable();
            $table->string('IsAllAnswerMandatory')->nullable();
            $table->integer('TotalMinutes')->nullable();
            $table->string('IsSectionSwitchAllowed')->nullable()->default('N');
            $table->integer('SortOrder')->default('0');
            $table->bigInteger('CreatedUser')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['ExamCode','PaperCode']);
            $table->foreign('ExamCode')->references('ExamCode')->on('exams')->onDelete('cascade');
            $table->foreign('CreatedUser')->references('id')->on('users')->onDelete('cascade');

        });

        Schema::table('exam_papers', function (Blueprint $table) {
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
        Schema::dropIfExists('exam_papers');
    }
};
