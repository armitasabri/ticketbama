<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Event;
use App\Models\Venue;
use App\Models\Event_rating;
use App\Models\Category;
use App\Models\Hall_sanse;
use App\Models\Comment;




class EventController extends Controller
{
    //

    

    public function single_event($id){
        $event=Event::find($id);
       
        $hall_sanses=Hall_sanse::where('event_id',$event->id)->get();
        // dd($event);
           
            // $venues=Venue::where('venue_name','like','%'.'سینما' .'%')->get(); 
            // dd($venues);
        $mgenres=Genre::where('genre_type','movie')->get();
        $tgenres=Genre::where('genre_type','theatre')->get();
        $cgenres=Genre::where('genre_type','concert')->get();
        $comments=Comment::where('events_id',$event->id)->where('cstatuses_id',1)->get();
        return view('events.single_event')->with('event',$event)->with('mgenres',$mgenres)
        ->with('tgenres',$tgenres)->with('cgenres',$cgenres)
        ->with('hall_sanses',$hall_sanses)->with('comments',$comments);

    }

    public function single_event_concert($id){
        $event=Event::find($id);
       
        $venues=Venue::where('venue_name','like','%'.'کنسرت' .'%')->get(); 
        // dd($venues);
  
    return view('events.single_event')->with('event',$event)->with('venues',$venues);

}

public function single_event_theatre($id){

    $event=Event::find($id);
  
    $venues=Venue::where('venue_name','like','%'.'تئاتر' .'%')->get(); 
    // dd($venues);
     
     return view('events.single_event')->with('event',$event)
    ->with('venues',$venues);

}
    public function m_events($id){

          $genre=Genre::find($id);   
            $movies=Event::where('genres_id',$genre->id)->get();
            //  dd($movies);
      
          
        return view('events.m_events')->with('genre',$genre)->with('movies',$movies);

    }

    public function t_events($id){

        $genre=Genre::find($id);  
        // dd($genre) ;
        $theatres=Event::where('genres_id',$genre->id)->get();
     
    return view('events.t_events')->with('genre',$genre)->with('theatres',$theatres);

    }

    public function c_events($id){

        $genre=Genre::find($id);  
        
        $concerts=Event::where('genres_id',$genre->id)->get();
     
    return view('events.c_events')->with('genre',$genre)->with('concerts',$concerts);

    }

    public function best_sellers(){
     
       
    }

    public function popular_events($id){

        $event=Event::find($id);
        
        $e_category=$event->categories_id;
        $cat=Category::where('id',$e_category)->first();
        $venues=Venue::where('venue_name','like','%'.$cat->name .'%')->get();
        // dd($venues);
        return view('events.single_event')->with('event',$event)->with('venues',$venues);
       

    }

    public function allmovies(){
        $movies=Event::where('categories_id',1)->get();
        return view('events.allmovies')->with('movies',$movies);
    }

    public function alltheatres(){
        $theatres=Event::where('categories_id',2)->get();
        return view('events.alltheatres')->with('theatres',$theatres);
    }

    public function allconcerts(){
        $concerts=Event::where('categories_id',3)->get();
        return view('events.allconcerts')->with('concerts',$concerts);
    }

    public function allpopulars(){
        $populars=Event_rating::where('stars','>=',4)->distinct('events_id')->get(['events_id']);
        return view('events.allpopulars')->with('populars',$populars);
    }

   
}
