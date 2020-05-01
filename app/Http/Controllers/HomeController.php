<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Genre;
use App\Models\Event_rating;
use App\Models\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $events=Event::where('categories_id',1)->take(4)->get();
        $theatres=Event::where('categories_id',2)->take(4)->get();
        $concerts=Event::where('categories_id',3)->take(4)->get();
       

         $populars=Event_rating::where('stars','>=',4)->distinct('events_id')->get(['events_id']);
        $comments=Comment::where('cstatuses_id',1)->get();
        
        return view('myhome')->with('events',$events)->with('populars',$populars)
        ->with('theatres',$theatres)->with('concerts',$concerts)->with('comments',$comments);
        // 
        // ->with('mgenres',$mgenres)->with('tgenres',$tgenres)
        // ->with('cgenres',$cgenres);
        
    }

    public function index2()
    {
        return view('home');
    }
}
