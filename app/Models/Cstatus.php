<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cstatus extends Model
{
    //
    public function Comment(){

        return $this->hasMany('App\Models\Comment','id','cstatuses_id');
    }
}
