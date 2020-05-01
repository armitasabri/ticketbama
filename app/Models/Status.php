<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    // public $table = "Status";
    
    public function Seat_hall_sanse(){

        return $this->hasMany('App\Models\Seat_hall_sanse');
    }

    public function Seat(){

        return $this->hasMany('App\Models\Seat');
    }

}
