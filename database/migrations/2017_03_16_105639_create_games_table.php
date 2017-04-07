<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('short_description');
            $table->longText('description');
            $table->date('release_date');
            $table->string('image_url');
            $table->integer('statistic_id')->unsigned()->nullable();
            $table->decimal('price',5 ,2)->unsigned();
            $table->integer('publisher_id')->unsigned();
            $table->integer('video_id')->unsigned();
            $table->integer('age_range_id')->unsigned();
            $table->timestamps();

            $table->foreign('statistic_id')->references('id')->on('statistics')->onDelete('cascade');
            $table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('cascade');
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->foreign('age_range_id')->references('id')->on('age_ranges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
