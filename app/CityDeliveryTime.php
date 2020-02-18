<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityDeliveryTime extends Model
{
    protected $guarded = [];

    protected $table = 'city_delivery_time';

    function deliveryExcludes()
    {
        return $this->belongsToMany(DeliveryExclude::class, 'city_delivery_exclude', 'city_delivery_time_id', 'delivery_exclude_id' );
    }

    public function scopeSearch($query, $city_id, $delivery_time_id)
    {
        return $query->where('city_id', $city_id)->where('delivery_time_id', $delivery_time_id);
    }
}
