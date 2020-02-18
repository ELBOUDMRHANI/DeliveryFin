<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $guarded = [];

    public function city()
    {
        return $this->hasOne(City::class);
    }
}
