<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    //

    
    // public $table = "Hall";

    public function Seatsection(){

        return $this->hasMany('App\Models\Seatsection' ,'id', 'seatsection_id');
    }

    public function Event(){

        return $this->hasMany('App\Models\Event' ,'id', 'hall_id');
    }

    public function Venue(){

        return $this->belongsTo('App\Models\Venue' ,'venue_id', 'id');
    }
}
