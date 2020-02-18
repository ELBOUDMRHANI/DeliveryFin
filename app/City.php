<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];
    public $timestamps = true;

    public function delivery_times()
    {
        return $this->belongsToMany(DeliveryTime::class);
    }
}