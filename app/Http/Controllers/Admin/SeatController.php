<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Venue;
use App\Models\hall;
use App\Models\Seatsection;

class SeatController extends Controller
{
    public function index(){
        
       $venues=Venue::all();
        
        return view('admin_seats.specification',compact(['venues']));
    }

    public function find_venue_halls(Request $request){

        $data=Hall::select('name','id')->where('venue_id',$request->id)->take(100)->get();
       return response()->json($data);
    }


    public function find_hall_seatsection(Request $request){

        $data=Seatsection::select('name','id')->where('hall_id',$request->id)->take(100)->get();
       return response()->json($data);

    }
   
    public function insertseat(Request $request){

        $rows=$request->get('horizontal');
        $cols=$request->get('vertical');
       $venue=$request->get('venue');
       $hall=$request->get('hall');
       $seatsection=$request->get('seatsection');
      
        // dd($seatsection);
        for ($i=1;$i<=$rows;$i++){
            for($j=1;$j<=$cols;$j++){
            $seat= new Seat();
            $seat->seat_row=$i;
               $seat->seat_col=$j;
               $seat->venue_id=$venue;
               $seat->hall_id=$hall;
               $seat->seatsection_id=$seatsection;
               $seat->save();
            }
        }

        $all=Seat::where('seatsection_id',$seatsection)->where('hall_id',$hall)
        ->where('venue_id',$venue)->get();
        $rows=$all->groupBy('seat_row')->count();
        $columns=($all->count()/$rows);
        // return view('admin_seats.ui')->with('cols',$cols)->with('rows',$rows);
        return view('admin_seats.ui2')->with('all',$all)->with('columns',$columns);
        // return view('seats.myseatplan4');
       }


       public function make_seat_plan(Request $request){
        $seats=Seat::all();
        $deleted=$request->deletes;
        $forwarded=$request->forwards;
        //   dd($deleted);
        //   dd($forwarded);

        if($forwarded){
            if(is_array($deleted)){
           foreach($forwarded as $forward){
              $seat=Seat::where('id',$forward)->first();

            //   dd($seat);
              $seat['forward']='yes';
              $seat->save();
         } } else{
            $seat=Seat::where('id',$forward)->first();
              $seat['forward']='yes';
              $seat->save();
          }


        }
          
 
          if($deleted){
              
        if(is_array($deleted)){
            foreach($deleted as $delete){
         
            $seat=Seat::where('id',$delete)->first();
        //  dd($seat);
            $seat->empty='yes';
            $seat->save();
        } 
        }
        else{
           
            $seat=Seat::find($deleted)->get();

            $seat->empty='yes';
            $seat->save();
          }
          } 
        
    }




    public function final_seat_plan(){
        
        $allseats=Seat::all();
        $rows=$allseats->groupBy('seat_row')->count();
        $columns=($allseats->count()/$rows);
        // dd($columns);
        $data=json_encode($columns);
        return view('seats.myseatplan4')->with('allseats',$allseats)->with('columns',$columns);
    }


}
