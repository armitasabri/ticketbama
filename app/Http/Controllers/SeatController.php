<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

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

        // $seats=Myseats::all();
        // // dd($seats);
        // $max=Myseats::max('row');
        // // dd($max);

        // return view('seats.myseat',compact(['seats','max']));
    }


      public function seatplan(){
          $seats=Seat::all();
        //   dd($seats);
    return view('seats.myseatplan1')->with('seats',$seats);
      }

    public function seat_reserved(Request $request) {
          $ids=$request->ids;
        //   dd($ids);
        $selected=Seat::find($ids);

        foreach($selected as $select){
            $select->status_id=1;
            $select->save(); 
            // $totalprice=$select->seatsection->price;
            // dd($totalprice['price']);
             echo json_encode($select);
        }
        
        // $selected->status_d=1;
        // $selected->save();
      
        // dd($select);
    }

    public function seat_sold(){
        
    }


    public function index(){
        return view('admin_seats.specification');
    }

    public function adminseat(Request $request){
        $cols=$request->get('vertical');
        $rows=$request->get('horizontal');
        return view('admin_seats.ui')->with('cols',$cols)->with('rows',$rows);
    }
}
