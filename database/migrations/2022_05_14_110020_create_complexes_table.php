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
            $table->boolean('volleyball')->default(1);
            $table->boolean('wifi')->default(1);
            $table->boolean('billiards')->default(1);
            $table->boolean('cafe')->default(1);
            $table->boolean('generator')->default(1);
            $table->boolean('shuttle')->default(1);
            $table->boolean('garden')->default(1);
            $table->boolean('finnish_sauna')->default(1);
            $table->boolean('jacuzzi')->default(1);
            $table->boolean('playground')->default(1);
            $table->boolean('hairdresser')->default(1);
            $table->boolean('own_beach')->default(1);
            $table->boolean('bar_pool')->default(1);
            $table->boolean('mini_club')->default(1);
            $table->boolean('video_observation')->default(1);
            $table->boolean('aquapark')->default(1);
            $table->boolean('table_tennis')->default(1);
            $table->boolean('security')->default(1);
            $table->boolean('indoor_pool')->default(1);
            $table->boolean('roman_sauna')->default(1);
            $table->boolean('tennis_court')->default(1);
            $table->boolean('satellite')->default(1);
            $table->boolean('fitness')->default(1);
            $table->boolean('walking_paths')->default(1);
            $table->boolean('conference')->default(1);
            $table->boolean('market')->default(1);
            $table->boolean('outdoor_parking')->default(1);
            $table->boolean('hamam')->default(1);
            $table->boolean('game_room')->default(1);
            $table->boolean('pavilions')->default(1);
            $table->boolean('child_pool')->default(1);
            $table->boolean('indoor_parking')->default(1);
            $table->boolean('bbq_area')->default(1);
            $table->boolean('basketball')->default(1);
            $table->boolean('amphitheater')->default(1);
            $table->boolean('bowling')->default(1);
            $table->boolean('concierge')->default(1);
            $table->boolean('ice_rink')->default(1);
            $table->boolean('massage_room')->default(1);
            $table->boolean('outdoor_pool')->default(1);
            $table->string('pros_1')->nullable();
            $table->string('pros_2')->nullable();
            $table->string('pros_3')->nullable();
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
