<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Myseat;
use App\Models\Hall_sanse;
use App\Models\Seat_hall_sanse;
use App\Models\Seatsection;
use App\Models\Price;
use App\Models\Order;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Bus\Dispatcher;
use App\Jobs\CheckSeatsJob;
use DispatchesJobs;
use Javascript;



class SeatController extends Controller
{
    
    public function seat_section($id){
     $h=Hall_sanse::find($id);
        return view('seats.seat_section',compact(['h']));

    }

    public function seat_section_view($id){
      $h=Hall_sanse::find($id);
         return view('seats.seat_section_view',compact(['h']));
 
     }

    public function seats($id,$section,$price,$order_id){

    $order=Order::find($order_id);
    $oid=intval($order->id);
    // dd($oid);
      $hs=Hall_sanse::find($id);
      $hid=$hs->hall_id;
      // dd($hid);
     $seatsection=$hs->Hall->Seatsection->where('name',$section)->first();
      $section_id=$seatsection->id;
      // dd($section_id);
      $p_id=$seatsection->prices_id;
      $p=Price::where('id',$p_id)->first();
      $p=$p->price;
      $tedad_bilit=intval($price/$p);
      // dd($tedad_bilit);
      $myallseats=Seat_hall_sanse::where('hall_sanse_id',$hs->id)->where('seatsection_id',$section_id)->get();
    //  dd($myallseats);
      $allseats=Seat::where('hall_id',$hid)
      ->where('seatsection_id',$section_id)->get();
    //  dd($allseats);
      $result=$allseats->isEmpty();
      if($result===false){
        $rows=$allseats->groupBy('seat_row')->count();
        // dd($rows);
        $columns=($allseats->count()/$rows);
        // dd($columns);
        $data=json_encode($columns);
        $jdata=json_encode($rows);
        return view('seats.seats',compact(['hs','myallseats','columns','tedad_bilit','oid','rows']));
       }
        else{
          $message="صندلی برای این بخش وجود ندارد";
          $columns=0;
        return view('seats.seats',compact(['hs','myallseats','message','rows','columns','oid','tedad_bilit']));

        }
        

    }


    public function seats_view($id,$section){

        $hs=Hall_sanse::find($id);
        
        $hid=$hs->hall_id;
        
      //  $seatsection=Seatsection::where('name',$section)->first();
      $seatsection=$hs->hall->seatsection->where('name',$section)->first();
      //  dd($seatsection);
        $section_id=$seatsection->id;
        $myallseats=Seat_hall_sanse::where('hall_sanse_id',$hs->id)->where('seatsection_id',$section_id)->get();
      //  dd($myallseats);
        $allseats=Seat::with('Seat_hall_sanse')->where('hall_id',$hid)
        ->where('seatsection_id',$section_id)->get();
      //  dd($allseats);
        $result=$allseats->isEmpty();
        if($result===false){
          $rows=$allseats->groupBy('seat_row')->count();
          // dd($rows);
          $columns=($allseats->count()/$rows);
          // dd($columns);
          $data=json_encode($columns);
          return view('seats.seats_view',compact(['hs','myallseats','columns','section']));
         }
          else{
            $message="صندلی برای این بخش وجود ندارد";
            $columns=0;
          return view('seats.seats_view',compact(['hs','myallseats','message','columns','section']));
  
          }
          
  
      }
    


    //   public function seatplan(){
    //       $seats=Seat::all();
    //     //   dd($seats);
    // return view('seats.myseatplan1')->with('seats',$seats);
    //   }

    

    



    // public function finalview(){
    //     // $cols=$request->get('vertical');
    //     // $rows=$request->get('horizontal');
        
    //     // $allseats=Myseat::groupBy('seat_row')->selectRaw('count(*) as total, seat_row')
    //     // ->get();
    //     $allseats=Myseat::all();
    //     $rows=$allseats->groupBy('seat_row')->count();
    //     $columns=($allseats->count()/$rows);
    //     // dd($columns);
    //     $data=json_encode($columns);
        
    //     // return response()->json($rows);
    //     // return Json($rows);
    //     // return response()->json(['msg'=>'Updated Successfully', 'success'=>true, 'data'=>$rows]);
    //     return view('seats.myseatplan4')->with('allseats',$allseats)->with('columns',$columns);
    // }




    public function seat_reserved(Request $request) {
      $ids=$request->ids;
 
    $selected=Seat_hall_sanse::find($ids);
      //  dd($selected);
    foreach($selected as $select){
      
      // $a=$select->Seat_hall_sanse->first();
      // $a->status_id=1;
      // $a->save(); 
     $select->status_id=1;
     $select->save();
    }
    $m="successfull!";
        echo json_encode($m);
}






public function seat_sold(Request $request){
  $ids=$request->ids;
  $user=Auth::user()->id;
  // dd($user);
  $order=Order::where('user_id',$user)->orderBy('id','DESC')->first();
  // dd($order);
  
$selected=Seat_hall_sanse::find($ids);
  //  dd($selected);
foreach($selected as $select){
  $ticket= new Ticket();
  $ticket->orders_id=$order->id;
  $ticket->seats_id=$select->seat->id;
  $select->status_id=2;
  $select->save(); 
  $ticket->save();

 
}
$m="successfull!";
    echo json_encode($m);
}



public function seat_Job(){
  
  $job=(new CheckSeatsJob())->delay(Carbon::now()->addSeconds(2));
  dispatch($job);
  return "job is done!";
}







}
