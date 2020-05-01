<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Myseat;
use App\Models\Hall_sanse;
use App\Models\Seat_hall_sanse;
use App\Models\Seatsection;

use Javascript;

class SeatController extends Controller
{
    
    public function seat_section($id){
     $h=Hall_sanse::find($id);
        return view('seats.seat_section',compact(['h']));

    }

    public function seats($id,$section){
      $hs=Hall_sanse::find($id);
      $hid=$hs->hall_id;
     $seatsection=Seatsection::where('name',$section)->first();

      $section_id=$seatsection->id;
      $myallseats=Seat_hall_sanse::where('hall_sanse_id',$hs->id)->get();
    //  dd($myallseats->Seat);
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
        return view('seats.seats',compact(['hs','allseats','columns']));
       }
        else{
          $message="صندلی برای این بخش وجود ندارد";
          $columns=0;
        return view('seats.seats',compact(['hs','allseats','message','columns']));

        }
        

    }

    


      public function seatplan(){
          $seats=Seat::all();
        //   dd($seats);
    return view('seats.myseatplan1')->with('seats',$seats);
      }

    

    public function seat_sold(){
        
    }


    // public function index(){
    //     return view('admin_seats.specification');
    // }

    // public function adminseat(Request $request){
    //     $rows=$request->get('horizontal');
    //     $cols=$request->get('vertical');
    //     // dd($rows);
    //     for ($i=1;$i<=$rows;$i++){
    //         for($j=1;$j<=$cols;$j++){
    //         $seat= new Myseat();
    //         $seat->seat_row=$i;
    //            $seat->seat_column=$j;
    //            $seat->save();
    //         }
    //     }

    //     $all=Myseat::all();
    //     $rows=$all->groupBy('seat_row')->count();
    //     $columns=($all->count()/$rows);
    //     // return view('admin_seats.ui')->with('cols',$cols)->with('rows',$rows);
    //     return view('admin_seats.ui2')->with('all',$all)->with('columns',$columns);

    //     // return view('seats.myseatplan4');

    // }

    // public function created_plan(Request $request){
    //     $seats=Myseat::all();
    //     $deleted=$request->deletes;
    //     $forwarded=$request->forwards;
    //     //   dd($deleted);
    //     //   dd($forwarded);

    //     if($forwarded){
    //         if(is_array($deleted)){
    //        foreach($forwarded as $forward){
    //         //    dd($forward);
    //         //   $num=round($forward/10);
    //         //   $num2=fmod($forward,10);
    //         // //   dd($num2);
    //         //   $seat=Myseat::where('seat_row',$num)->where('seat_column',$num2)->first();
    //           $seat=Myseat::where('id',$forward)->first();

    //         //   dd($seat);
    //           $seat['forward']='yes';
    //           $seat->save();
    //      } } else{
    //         $seat=Myseat::where('id',$forward)->first();
    //           $seat['forward']='yes';
    //           $seat->save();
    //       }


    //     }
          
 
    //       if($deleted){
              
    //     if(is_array($deleted)){
    //         foreach($deleted as $delete){
    //             // dd($delete);
    //         // $num=round($delete/10);
    //         // $num2=fmod($delete,10);
    //         // // dd($num);
    //         // $seat=Myseat::where('seat_row',$num)->where('seat_column',$num2)->first();
    //         // dd($seat);
    //         $seat=Myseat::where('id',$delete)->first();
    //     //  dd($seat);
    //         $seat->empty='yes';
    //         $seat->save();
    //     } 
    //     }
    //     else{
    //         // $num=round($delete/10);
    //         // $num2=fmod($delete,10);
    //         // dd($num);
    //         // $seat=Myseat::where('seat_row',$num)->where('seat_column',$num2)->first();
    //         // dd($seat);
    //         $seat=Myseat::find($deleted)->get();

    //         $seat->empty='yes';
    //         $seat->save();
    //       }
    //       } 
        
    // }

    public function finalview(){
        // $cols=$request->get('vertical');
        // $rows=$request->get('horizontal');
        
        // $allseats=Myseat::groupBy('seat_row')->selectRaw('count(*) as total, seat_row')
        // ->get();
        $allseats=Myseat::all();
        $rows=$allseats->groupBy('seat_row')->count();
        $columns=($allseats->count()/$rows);
        // dd($columns);
        $data=json_encode($columns);
        
        // return response()->json($rows);
        // return Json($rows);
        // return response()->json(['msg'=>'Updated Successfully', 'success'=>true, 'data'=>$rows]);
        return view('seats.myseatplan4')->with('allseats',$allseats)->with('columns',$columns);
    }

    public function seat_reserved(Request $request) {
      $ids=$request->ids;
      // dd($ids);
    $selected=Seat::find($ids);
      //  dd($selected);
    foreach($selected as $select){
      
      $a=$select->Seat_hall_sanse->first();
      $a->status_id=1;
      $a->save(); 
        // $totalprice=$select->seatsection->price;
        // dd($totalprice['price']);
         echo json_encode($a);
    }
    
    // $selected->status_d=1;
    // $selected->save();
  
    // dd($select);
}
}
