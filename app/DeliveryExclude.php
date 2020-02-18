<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryExclude extends Model
{
    protected $guarded = [];

    function citiesDelevryTimes(){
        return $this->belongsToMany(CityDeliveryTime::class, 'city_delivery_exclude', 'delivery_exclude_id', 'city_delivery_time_id');
    }

}
