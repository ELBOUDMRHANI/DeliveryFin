<?php

use Illuminate\Database\Seeder;
use App\City;
use App\DeliveryTime;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        City::query()->delete();
        $rabat = City::create([
            'name' => 'Rabat',
        ]);
        $casa = City::create([
            'name' => 'Casa',
        ]);
        $tangier = City::create([
            'name' => 'Tangier',
        ]);

        /* if you want attach DeliveryTimes to cities by seeder */
        /*
        $time_9_12 = DeliveryTime::whereDeliveryAt('9->12')->pluck('id')->first();
        $time_14_18 = DeliveryTime::whereDeliveryAt('14->18')->pluck('id')->first();
        $rabat->delivery_times()->sync([$time_9_12, $time_14_18]);

        $time_10_13 = DeliveryTime::whereDeliveryAt('10->13')->pluck('id')->first();
        $time_15_19 = DeliveryTime::whereDeliveryAt('15->19')->pluck('id')->first();
        $casa->delivery_times()->sync([$time_10_13, $time_15_19]);

        $time_9_13 = DeliveryTime::whereDeliveryAt('9->13')->pluck('id')->first();
        $time_18_20 = DeliveryTime::whereDeliveryAt('18->20')->pluck('id')->first();
        $tangier->delivery_times()->sync([$time_9_13, $time_14_18, $time_18_20]);
        */
    }
}