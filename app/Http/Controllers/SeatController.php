<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatController extends Controller
{
    //
    public function seat_section(){

        return view('seats.seat_section');

    }

    public function seats(){

        return view('seats.seats');

    }

    public function myseat(){
        $seats=Myseats::all();
        // dd($seats);
        $max=Myseats::max('row');
        // dd($max);

        return view('seats.myseat',compact(['seats','max']));
    }

    public function seat_reserved(){

    }

    public function seat_sold(){
        
    }
}
