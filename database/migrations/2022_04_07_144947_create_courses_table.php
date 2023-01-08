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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('title');
            $table->string('slug'); // Field name same as your `saveSlugsTo`
            $table->longText('description')->nullable();
            $table->string('language');
            $table->longText('intro_url')->nullable();
            $table->string('level');
            $table->text('cover_image')->nullable();;
            $table->float('price')->default('0.00');
            $table->float('discount_price')->default('0.00');
            $table->string('status')->default('0');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
