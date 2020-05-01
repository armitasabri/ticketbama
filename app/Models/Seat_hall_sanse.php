<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat_hall_sanse extends Model
{
    //

    public function Status(){

        return $this->belongsTo('App\Models\Status' );
    }
    
    public function Hall_sanse(){

        return $this->belongsTo('App\Models\Hall_sanse');
    }

    public function Seat(){

        return $this->belongsTo('App\Models\Seat');
    }
}
