<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru')->nullable();;
            $table->string('title_en')->nullable();;
            $table->string('media_ru')->nullable();;
            $table->string('media_en')->nullable();;
            $table->text('desc1_ru')->nullable();;
            $table->text('desc2_ru')->nullable();;
            $table->text('desc1')->nullable();;
            $table->text('desc2')->nullable();;
            $table->string('image1')->nullable();;
            $table->string('image2')->nullable();;
            $table->string('image3')->nullable();;
            $table->string('image4')->nullable();;
            $table->string('image5')->nullable();;
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
        Schema::dropIfExists('articles');
    }
}
