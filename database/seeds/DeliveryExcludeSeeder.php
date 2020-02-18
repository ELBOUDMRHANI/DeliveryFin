<?php

use Illuminate\Database\Seeder;
use App\DeliveryExclude;
class DeliveryExcludeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryExclude::query()->delete();
        DeliveryExclude::create([
            'date_exclu' => Carbon\Carbon::now()
        ]);
    }
}
