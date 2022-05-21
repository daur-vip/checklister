<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('complex_id')->constrained();
            // $table->text('desc1_ru')->nullable();
            // $table->text('desc2_ru')->nullable();
            // $table->text('desc3_ru')->nullable();
            // $table->text('desc4_ru')->nullable();
            // $table->text('desc1_en')->nullable();
            // $table->text('desc2_en')->nullable();
            // $table->text('desc3_en')->nullable();
            // $table->text('desc4_en')->nullable();
            $table->integer('price_euro');
            $table->integer('price_dollar');
            $table->integer('price_tenge');
            $table->integer('square');
            $table->string('flat_ru');
            $table->string('flat_en');
            $table->boolean('first')->default(1);
            $table->boolean('furnished')->default(1);
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            $table->string('image8')->nullable();
            $table->string('image9')->nullable();
            $table->string('image10')->nullable();
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
        Schema::dropIfExists('flats');
    }
}
