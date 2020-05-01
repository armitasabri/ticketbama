<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //
    // public $table = "Price";
    public function Seatsection(){

        return $this->hasMany('App\Models\Seatsection','id','prices_id' );
    }
}
