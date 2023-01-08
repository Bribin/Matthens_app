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
        Schema::create('exams', function (Blueprint $table) {

            $table->integer('id')->from('100')->unique();
            $table->string('ExamCode');
            $table->string('Name');
            $table->text('Description')->nullable();
            $table->string('LogoImage')->nullable();
            $table->string('IsActive')->default('Y');
            $table->integer('SortOrder')->default('0');
            $table->integer('NoofExams')->nullable();
            $table->string('IsSectionTimeLimit')->default('N');
            $table->string('IsSingleExam')->default('Y');
            $table->float('TimeSectionLimit')->default('0');
            $table->bigInteger('CreatedUser')->unsigned()->index();
            $table->float('Price')->default('0.00');
            $table->float('DiscountedPrice')->default('0.00');
            $table->primary('ExamCode');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('CreatedUser')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('exams', function (Blueprint $table) {
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
        Schema::dropIfExists('exams');
    }
};
