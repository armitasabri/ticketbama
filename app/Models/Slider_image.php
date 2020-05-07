<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider_image extends Model
{
    //
    public function Event(){
        return $this->belongsTo('App\Models\Event');
    }

    public function Photo(){
        return $this->morphMany('App\Models\Photo','imageable');
    }
}
