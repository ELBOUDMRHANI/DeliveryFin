<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\DeliveryTime;

class DeliveryTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $date = Carbon::now()->format('Y-m-d H:i:s');
        DeliveryTime::query()->delete();
        DeliveryTime::insert([
            [
                'delivery_at' => '9->12',
            ],
            [
                'delivery_at' => '14->18',
            ],
            [
                'delivery_at' => '10->13',
            ],
            [
                'delivery_at' => '15->19',
            ],
            [
                'delivery_at' => '9->13',
            ],
            [
                'delivery_at' => '18->20',
            ],
        ]);
    }
}