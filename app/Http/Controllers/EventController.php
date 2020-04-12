<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Event;

class EventController extends Controller
{
    //

    

    public function single_event($id){
            $event=Event::find($id);
            // dd($event);
        $mgenres=Genre::where('genre_type','movie')->get();
        $tgenres=Genre::where('genre_type','theatre')->get();
        $cgenres=Genre::where('genre_type','concert')->get();
        return view('events.single_event')->with('event',$event)->with('mgenres',$mgenres)
        ->with('tgenres',$tgenres)->with('cgenres',$cgenres);

    }
    public function m_events($id){

          $genre=Genre::find($id);   
            $movies=Event::where('genres_id',$genre->id)->get();
            //  dd($movies);
        $mgenres=Genre::where('genre_type','movie')->get();
        $tgenres=Genre::where('genre_type','theatre')->get();
        $cgenres=Genre::where('genre_type','concert')->get();
          
        return view('events.m_events')->with('genre',$genre)->with('movies',$movies)
        ->with('mgenres',$mgenres)->with('tgenres',$tgenres)->with('cgenres',$cgenres);

    }

    public function t_events(){

        $mgenres=Genre::where('genre_type','movie')->get();
        $tgenres=Genre::where('genre_type','theatre')->get();
        $cgenres=Genre::where('genre_type','concert')->get();

        return view('events.t_events')->with('mgenres',$mgenres)->with('tgenres',$tgenres)->with('cgenres',$cgenres);

    }

    public function c_events(){

        $mgenres=Genre::where('genre_type','movie')->get();
        $tgenres=Genre::where('genre_type','theatre')->get();
        $cgenres=Genre::where('genre_type','concert')->get();

        return view('events.c_events')->with('mgenres',$mgenres)->with('tgenres',$tgenres)->with('cgenres',$cgenres);

    }

    public function best_sellers(){

        $mgenres=Genre::where('genre_type','movie')->get();
        $tgenres=Genre::where('genre_type','theatre')->get();
        $cgenres=Genre::where('genre_type','concert')->get();
    }

    public function popular_events(){
        $mgenres=Genre::where('genre_type','movie')->get();
        $tgenres=Genre::where('genre_type','theatre')->get();
        $cgenres=Genre::where('genre_type','concert')->get();

    }

   
}
