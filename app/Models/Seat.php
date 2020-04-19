<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //
    // public $table = "Seat";

    public function Status(){

        return $this->belongsTo('App\Models\Status' ,'status_id', 'id');
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
}
