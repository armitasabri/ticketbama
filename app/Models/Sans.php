<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sans extends Model
{
    //
    public $table = "Sans";

    public function Order(){

        return $this->hasMany('App\Models\Order' ,'id', 'sans_id');
    }

    public function Seat(){
        return $this->belongsToMany('App\Models\Seat');
    }

    public function Event(){

        return $this->hasMany('App\Models\Event' ,'id', 'event_id');
    }

}
