<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    // public $table = "Status";
    
    public function Seats(){

        return $this->hasMany('App\Models\Seats' ,'id', 'status_id');
    }
}
