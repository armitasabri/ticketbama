<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class EventController extends Controller
{
    //
    public function single_event(){

        return view('events.single_event');

    }
    public function m_events(){

        return view('events.m_events');

    }

    public function t_events(){

        return view('events.t_events');

    }

    public function c_events(){

        return view('events.c_events');

    }

    public function best_sellers(){

    }

    public function popular_events(){

    }

   
}
