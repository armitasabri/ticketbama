<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    public $table = "Transaction";
    
    public function Order(){

        return $this->belongsTo('App\Models\Order' ,'order_id', 'id');
    }
}
