<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryTime extends Model
{
    protected $guarded = [];

    public function cities()
    {
        return $this->belongsToMany(City::class);
    }
}
