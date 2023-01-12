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
        Schema::create('exam_subjects', function (Blueprint $table) {
            $table->integer('id')->from('100')->unique();
            $table->string('ExamSubjectCode');
            $table->string('Name');
            $table->text('Description')->nullable();
            $table->string('IsActive')->default('Y')->nullable();
            $table->integer('SortOrder')->default('0');
            $table->bigInteger('CreatedUser')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();
            $table->primary('ExamSubjectCode');
            $table->foreign('CreatedUser')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('exam_subjects', function (Blueprint $table) {
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
        Schema::dropIfExists('exam_subjects');
    }
};
