<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    // public $table = "Blog";

    public function Event(){
        return $this->belongsTo('App\Models\Event','event_id','id');
    }

    public function Tag()
    {
        return $this->morphtoMany("App\Models\Tag","tagable");
    }

    public function Photo(){
        return $this->morphMany('App\Models\Photo','imageable');
    }

    public function Video(){
        return $this->morphMany('App\Models\Video','videoable');
    }
}
