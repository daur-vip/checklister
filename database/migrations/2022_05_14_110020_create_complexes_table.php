<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complexes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc1_ru')->nullable();
            $table->text('desc2_ru')->nullable();
            $table->text('desc3_ru')->nullable();
            $table->text('desc4_ru')->nullable();
            $table->text('desc5_ru')->nullable();
            $table->text('desc6_ru')->nullable();
            $table->text('desc1_en')->nullable();
            $table->text('desc2_en')->nullable();
            $table->text('desc3_en')->nullable();
            $table->text('desc4_en')->nullable();
            $table->text('desc5_en')->nullable();
            $table->text('desc6_en')->nullable();
            $table->string('image1');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            $table->string('image8')->nullable();
            $table->string('image9')->nullable();
            $table->string('image10')->nullable();
            $table->string('image11')->nullable();
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
        Schema::dropIfExists('complexes');
    }
}