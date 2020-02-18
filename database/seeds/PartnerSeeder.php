<?php

use Illuminate\Database\Seeder;
use App\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::query()->delete();
        Partner::insert(
            [
                [
                    'name' => 'Mohamed',
                    'city_id' => 1
                ],
                [
                    'name' => 'Hassan',
                    'city_id' => 2
                ],
                [
                    'name' => 'Nada',
                    'city_id' => 3
                ],
            ]
        );
    }
}