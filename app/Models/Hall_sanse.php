<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall_sanse extends Model
{
    public function Hall(){
        return $this->belongsTo('App\Models\Hall');
    }

    public function Sanse(){
        return $this->belongsTo('App\Models\Sanse','sanse_id','id');
    }


    public function Event(){
        return $this->belongsTo('App\Models\Event');
 
   }

   public function Seat_hall_sanse(){
    return $this->hasMany('App\Models\Seat_hall_sanse');

}




}
