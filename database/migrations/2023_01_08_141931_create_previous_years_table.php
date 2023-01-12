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
        Schema::create('previous_years', function (Blueprint $table) {
            $table->id()->from('100');
            $table->string('PreviousYearCode')->unsigned()->index();
            $table->string('Name');
            $table->string('IsActive');
            $table->string('AnswerPath');
            $table->integer('SortOrder')->default('0');
            $table->bigInteger('CreatedUser')->unsigned()->index();
            $table->foreign('PreviousYearCode')->references('PreviousYearCode')->on('exam_questions')->onDelete('cascade');
            $table->foreign('CreatedUser')->references('id')->on('users')->onDelete('cascade');
            $table->primary('PreviousYearCode');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('previous_years', function (Blueprint $table) {
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
        Schema::dropIfExists('previous_years');
    }
};
