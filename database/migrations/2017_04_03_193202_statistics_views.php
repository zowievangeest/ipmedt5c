<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StatisticsViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics_views', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('statistic_id')->unsigned()->index();
            $table->increments('view_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('statistic_id')->references('id')->on('statistics')->onDelete('cascade');
            $table->foreign('view_id')->references('id')->on('views')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
