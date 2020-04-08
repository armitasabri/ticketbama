<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Event_categories;
use App\Models\Movie_theatre_genres;



class SiteController extends Controller
{
    //
    public function tracking(){

        return view('site.tracking');

    }

    public function contactus(){

        return view('site.contactus');

    }
    public function blog(){

        return view('site.blog');

    }

    public function contactus_save(){

    }


    public function search_result(Request $request){
         
        // $cat=Movie_theatre_genres::all();
        // dd($cat);
    //     $k=$request->get('keyword');
    //     $cat=Event_categories::where('name', 'LIKE','%' .$k. '%')->first();
    //     if($cat != ""){
    //            $category_id=$cat->id; 
    //     }else{
    //         $category_id=null;
    //     }
    
    //     $genre=Movie_theatre_genres::where('genre_name', 'LIKE','%' .$k. '%')->first();
    //     if($genre != ""){
    //         $genre_id=$genre->id;
    //  }else{
    //      $genre_id=null;
    //  }
        
    //     if($k != " ") 
    //     {
    //         $events=Events::with('Event_categories')->with('Movie_theatre_genres')->where('event_title', 'LIKE','%' .$k. '%')
    //         ->orWhere('director', 'LIKE','%' .$k. '%')
    //         ->orWhere('event_category_id', $category_id)
    //         ->orWhere('Movie_theatre_genre_id', $genre_id)->get();
    //         // if(count($events) >0 )
    //         // dd(is_null($events->id));
    //         return view('site.searchresult')->with('events',$events)->with('k',$k);
    //       if($events == null){
    //           $m="نتیجه نداشت";
    //         return view('site.searchresult')->with('Message',$m);
    //       }
    //     }
    }


    public function upcoming_news(){

   }
}
