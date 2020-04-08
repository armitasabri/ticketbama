<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function blog(){
        return view('blog');
    }
    
    public function contactus(){
        return view('contactus');
    }

    public function movie_eventscategory(){
        return view('m_events');
    }
    public function theatre_eventscategory(){
        return view('t_events');
    }
    public function concert_eventscategory(){
        return view('c_events');
    }
    public function single_event(){
        return view('events.single_event');
    }
    public function seat_section(){
        return view('seats.seat_section');
    }
    public function seats(){
        return view('seats.seats');
    }

    public function tracking(){
        return view('site.tracking');
    }

    public function final_ticket(){
        return view('ticketing.final_ticket');
    }
    public function prepay_ticket(){
        return view('ticketing.prepay_ticket');
    }
    public function select_section(){
        return view('ticketing.section_select');
    }
    public function login(){
        return view('userpages.login');
    }
     public function register(){
        return view('userpages.register');
    }
     public function profile(){
        return view('userpages.profile');
    }
}
