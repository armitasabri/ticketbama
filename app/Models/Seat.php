<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //
    // public $table = "Seat";

    public function Status(){

        return $this->belongsTo('App\Models\Status');
    }

    public function Sans(){
        return $this->belongsToMany('App\Models\Sans');
    }

    public function Seatsection(){
        return $this->belongsTo('App\Models\Seatsection');
    }

    public function Ticket(){

        return $this->hasMany('App\Models\Status' ,'id', 'seat_id');
    }

    public function Seat_hall_sanse(){
        return $this->hasMany('App\Models\Seat_hall_sanse');
    
    }

    
}
