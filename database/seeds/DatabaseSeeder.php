<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DeliveryTimeSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(DeliveryExcludeSeeder::class);
    }
}
