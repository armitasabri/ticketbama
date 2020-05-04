<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class To_do_list extends Model
{
    //
    public function User(){
        return $this->belongstoMany('App\Models\User','user_to_do_lists');
    }
}
