<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    //
    // public $table = "Venue";

    public function Hall(){

        return $this->hasMany('App\Models\Hall');
    }

    public function Tag()
    {
        return $this->morphtoMany("App\Models\Tag","tagable");
    }

    public function Event(){
        return $this->belongsToMany('App\Models\Event','event_venue');
    }
    public function Seat(){
        return $this->belongsTo('App\Models\Seat');
    }
}
