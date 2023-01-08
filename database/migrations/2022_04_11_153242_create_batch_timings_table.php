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
        Schema::create('batch_timings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('batch_id')->unsigned()->index();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->date('date');
            $table->timestamp('time');
            $table->string('duration');
            $table->string('status')->default('0');
            $table->foreign('batch_id')->references('id')->on('batches')->onDelete('cascade');
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
        Schema::dropIfExists('batch_timings');
    }
};
