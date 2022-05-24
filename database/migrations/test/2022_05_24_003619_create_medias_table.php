<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('smi_ru');
            $table->string('smi_en');
            $table->string('seo_desc_ru')->nullable();
            $table->string('seo_keywords_ru')->nullable();
            $table->string('seo_desc_en')->nullable();
            $table->string('seo_keywords_en')->nullable();
            $table->text('desc1_ru')->nullable();
            $table->text('desc2_ru')->nullable();
            $table->text('desc1_en')->nullable();
            $table->text('desc2_en')->nullable();
            $table->string('image1');
            $table->text('image1_desc_ru')->nullable();
            $table->text('image1_desc_en')->nullable();
            $table->string('image2')->nullable();
            $table->text('image2_desc_ru')->nullable();
            $table->text('image2_desc_en')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
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
        Schema::dropIfExists('media');
    }
}
