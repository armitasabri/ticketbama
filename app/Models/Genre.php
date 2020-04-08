<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //

    public $table = "Genre";

    public function Event(){

        return $this->hasMany('App\Models\Event' ,'id', 'event_id');
    }
}
