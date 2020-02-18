<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityDeliveryTimeDeliveryExcludesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_delivery_exclude', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('city_delivery_time_id')->unsigned()->index();
            $table->integer('delivery_exclude_id')->unsigned()->index();


            $table->foreign('city_delivery_time_id')->references('id')->on('delivery_times')->onDelete('cascade');
            $table->foreign('delivery_exclude_id')->references('id')->on('delivery_excludes')->onDelete('cascade');

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
        Schema::dropIfExists('city_delivery_exclude');
    }
}
