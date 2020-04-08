<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketingController extends Controller
{
    //
    public function section_select(){

        return view('ticketing.section_select');

    }
    public function prepay_ticket(){

        return view('ticketing.prepay_ticket');

    }
    public function final_ticket(){

        return view('ticketing.final_ticket');

    }
}
