<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sanse extends Model
{
    //
    // public $table = "Sanse";

    public function Order(){

        return $this->hasMany('App\Models\Order' ,'id', 'sanse_id');
    }

    public function Seat(){
        return $this->belongsToMany('App\Models\Seat');
    }

    public function Event(){

        return $this->hasMany('App\Models\Event' ,'id', 'event_id');
    }

    public function Hall_sanse(){
        return $this->hasMany('App\Models\Hall_sanse','id','sanse_id');
    }

}
