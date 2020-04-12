<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Genre;
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
        // $events=Event::with('Photo')->get();
        $events=Event::where('categories_id',1)->take(5)->get();
        $theatres=Event::where('categories_id',2)->take(4)->get();
        $concerts=Event::where('categories_id',3)->take(4)->get();
        // dd($theatres);
        $mgenres=Genre::where('genre_type','movie')->get();
        $tgenres=Genre::where('genre_type','theatre')->get();
        $cgenres=Genre::where('genre_type','concert')->get();

        
        return view('myhome')->with('events',$events)
        ->with('theatres',$theatres)->with('concerts',$concerts)
        ->with('mgenres',$mgenres)->with('tgenres',$tgenres)->with('cgenres',$cgenres);
        
    }

    public function index2()
    {
        return view('home');
    }
}
