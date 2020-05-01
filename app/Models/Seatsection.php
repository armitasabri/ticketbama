<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seatsection extends Model
{
    //
    //  public $table="Seatsection";

    public function Hall(){

        return $this->belongsTo('App\Models\Hall');
    }

    public function Order(){

        return $this->hasMany('App\Models\Order' ,'id', 'seatsection_id');
    }

    public function Price(){

        return $this->belongsTo('App\Models\Price','prices_id','id' );
    }

    public function Seat(){

        return $this->hasMany('App\Models\Seat' );
    }
}
