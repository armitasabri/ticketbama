<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    // public $table = "Photo";
    protected $fillable=['imageable_id','path','imageable_type'];


    public function Imageable(){

        return $this->morphTo();
    }
}
