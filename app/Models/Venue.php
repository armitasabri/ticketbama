<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    //
    public $table = "Venue";

    public function Hall(){

        return $this->hasMany('App\Models\Hall' ,'id', 'venue_id');
    }

    public function Tag()
    {
        return $this->morphtoMany("App\Models\Tag","tagable");
    }
}
