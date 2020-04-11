<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    // public $table = "Photo";
    
    public function Imageable(){

        return $this->morphTo();
    }
}
