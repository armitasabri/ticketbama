<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    // public $table = "Tag";

    public function Event()
    {
        return $this->morphedByMany("App\Models\Event","tagable");
    }

    public function Venue()
    {
        return $this->morphedByMany("App\Models\Venue","tagable");
    }
    public function Blog()
    {
        return $this->morphedByMany("App\Models\Blog","tagable");
    }
}
