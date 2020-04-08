<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public $table = "Video";

    public function Videoable(){

        return $this->morphTo();
    }
}
