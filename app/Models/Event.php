<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public $table = "Event";
    
   public function Sans(){
       return $this->belongsTo('App\Models\Sans');
   }

   public function Hall(){
    return $this->belongsTo('App\Models\Hall','Hall_id','id');
   }

   public function Genre(){
    return $this->belongsTo('App\Models\Genre','genre_id','id');
   }

   public function Category(){
    return $this->belongsTo('App\Models\Category','category_id', 'id');
   }


   public function Venue(){
    return $this->belongsTo('App\Models\Venue');
   }

   public function Blog(){
    return $this->hasMany('App\Models\Blog','id','event_id');
   }

   public function Comment(){
    return $this->hasMany('App\Models\Comment','id','event_id');
   }

   public function Event_rating(){
    return $this->hasMany('App\Models\Event_rating','id','event_id');
   }

   public function Favourite(){
    return $this->hasMany('App\Models\Favourite','id','event_id');
   }

   public function Order(){

    return $this->hasMany('App\Models\Order' ,'id', 'event_id');
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
