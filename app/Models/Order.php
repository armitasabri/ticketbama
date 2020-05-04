<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    // public $table = "Order";

    public function Seatsection(){

        return $this->belongsTo('App\Models\Seatsection' ,'seatsections_id','id' );
    }

    public function Event(){

        return $this->belongsTo('App\Models\Event' ,'events_id', 'id');
    }

    public function User(){

        return $this->belongsTo('App\Models\User' ,'user_id', 'id');
    }

    public function Sanse(){

        return $this->belongsTo('App\Models\Sanse' ,'sanses_id', 'id');
    }

    public function Ticket(){

        return $this->hasMany('App\Models\Ticket' ,'id', 'orders_id');
    }

    public function Transaction(){

        return $this->hasMany('App\Models\Transaction' ,'id', 'order_id');
    }
}
