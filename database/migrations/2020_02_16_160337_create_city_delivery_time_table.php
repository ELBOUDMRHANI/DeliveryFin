<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityDeliveryTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_delivery_time', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('city_id')->unsigned()->index();
            $table->integer('delivery_time_id')->unsigned()->index();


            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('delivery_time_id')->references('id')->on('delivery_times')->onDelete('cascade');

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
        Schema::dropIfExists('city_delivery_time');
    }
}