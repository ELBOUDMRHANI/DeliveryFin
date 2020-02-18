<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\City;
use Illuminate\Http\Request;
use App\DeliveryExclude;
use Illuminate\Support\Facades\DB;
use App\CityDeliveryTime;


class CityController extends Controller
{

    public function store(Request $request)
    {
        $city = City::create($request->all());
        return response()->json([
            'saved' => "success",
        ], 200);
    }

    public function attachDeliveryTimesToCity(City $city, Request $request)
    {
        $city->delivery_times()->sync(json_decode($request->delivery_times));
        return response()->json([
            'saved' => 'success',
        ], 200);
    }

   public function availableDelivery(City $city, $number_of_days){


            $days = [];
            $delevry_times = $city->delivery_times()->get();
            for($i=0;$i<$number_of_days;$i++){
                    $day_current = Carbon::now()->addDays($i)->format('Y-m-j');
                    $exclude_id = DeliveryExclude::where('date_exclu', $day_current)->first();
                    $exclude_id = isset($exclude_id) ? $exclude_id->id : null;

                    foreach ($delevry_times as $key => $delevry_time) {

                        $cityDeliveryTime_id = CityDeliveryTime::search($delevry_time->pivot->city_id,$delevry_time->pivot->delivery_time_id)->first();
                        $cityDeliveryTime_id = isset($cityDeliveryTime_id)? $cityDeliveryTime_id->id : null;

                        $not_available_delevry = DB::table('city_delivery_exclude')->where('city_delivery_time_id', $cityDeliveryTime_id)->where('delivery_exclude_id', $exclude_id)->first();

                         if(isset($not_available_delevry)){
                            $days[$i][$key] = null;
                         }
                        if( !isset($not_available_delevry) ){
                            $days[$i][$key] = $delevry_time->delivery_at;
                        }

                    }
            }
            return ['days', $days];
   }
}
