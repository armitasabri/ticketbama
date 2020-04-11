<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    // public $table = "Comment";

    public function Event(){

        return $this->belongsTo('App\Models\Event' ,'event_id', 'id');
    }

    public function User(){

        return $this->belongsTo('App\Models\User' ,'user_id', 'id');
    }
}
