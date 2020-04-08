<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public $table = "Order";

    public function Seatsection(){

        return $this->belongsTo('App\Models\Seatsection' ,'seatsection_id','id' );
    }

    public function Event(){

        return $this->belongsTo('App\Models\Event' ,'event_id', 'id');
    }

    public function User(){

        return $this->belongsTo('App\Models\User' ,'user_id', 'id');
    }

    public function Sans(){

        return $this->belongsTo('App\Models\Sans' ,'sans_id', 'id');
    }

    public function Ticket(){

        return $this->hasMany('App\Models\Ticket' ,'id', 'order_id');
    }

    public function Transaction(){

        return $this->hasMany('App\Models\Transaction' ,'id', 'order_id');
    }
}
