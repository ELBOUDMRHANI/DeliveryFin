<?php

namespace App\Http\Controllers;

use App\DeliveryExclude;
use App\CityDeliveryTime;

class DeliveryExcludeController extends Controller
{
   function delevryExcludes($city_id, $delivery_time_id, $delevry_exclude_id){
        $cityDeliveryTime = CityDeliveryTime::search($city_id, $delivery_time_id)->first();
        $cityDeliveryTime->deliveryExcludes()->sync([$delevry_exclude_id]);
        return response()->json([
            'exclude' => 'success',
        ], 200);
   }

    function delevryExcludesAll($city_id, DeliveryExclude $delevry_exclude)
    {
        $cityDeliveryTimes = CityDeliveryTime::where('city_id', $city_id)->pluck('id');
        $delevry_exclude->citiesDelevryTimes()->sync($cityDeliveryTimes);
        return response()->json([
            'exclude' => 'success',
        ], 200);
    }
}

