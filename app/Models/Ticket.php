<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    // public $table = "Ticket";

    public function Seat(){
        return $this->belongsTo('App\Models\Seat','seats_id','id');
    }
    public function Order(){
        return $this->belongsTo('App\Models\Order','orders_id','id');
    }
}
