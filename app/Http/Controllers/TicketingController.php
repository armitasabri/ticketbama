<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall_sanse;
use App\Models\Hall;
use App\Models\Order;
use App\Models\Seatsection;
use Carbon\Carbon;
use Carbon\Traits\Timestamp;
use Shetabit\Payment\Invoice;
use Shetabit\Payment\Facade\Payment;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use PhpParser\Node\Stmt\Global_;
use SoapClient;


class TicketingController extends Controller
{
    //
    public function section_select($id){
         $hall_sanse=Hall_sanse::find($id);
        //  dd($hall_sanse);
        return view('ticketing.section_select',compact(['hall_sanse']));

    }
    public function prepay_ticket(Request $request,$id){

        $hall_sanse=Hall_sanse::find($id); 
        $jaygah=$request->get('jaygah');
        $tedad=$request->get('tedad');
        $hall_id=$hall_sanse->Hall->id;
        $seatsection=Seatsection::where('hall_id',$hall_id)->where('name',$jaygah)->first();
        $selected_section=$seatsection->name;
        $single_ticket=$seatsection->price->price;
        $total=$tedad*$single_ticket;
       
        return view('ticketing.prepay_ticket',compact(['total','selected_section','tedad','hall_sanse']));

    }

    
    
    public function final_ticket($fee,$hall_sanse,$place){

       $hallsanse=Hall_sanse::find($hall_sanse);
        $m=intval($fee) ;
        // dd($m);
        // $test=90000;
        $order= new Order();
      $order->user_id=Auth::user()->id;
      
       $order->order_time=Carbon::now();
       $order->total_price=$fee;
       $order->final_price=$fee;
       $order->payment_status="pending";
        $order->events_id=$hallsanse->Event->id;
       
       $a=$hallsanse->Hall->Seatsection;
       $b=$a->where('name',$place)->first();
       $order->seatsections_id=$b->id;
   
       $order->sanses_id=$hallsanse->sanse->id;
       $order->save();

    //   $myTra=new Transaction();
       
       

        $invoice= (new Invoice)->amount($m);
        return Payment::config(['mode' => 'sandbox'])->purchase(

        $invoice,
       function($driver, $transactionId){
           $user=Auth::user()->id;
          $order=Order::where('user_id',$user)->orderBy('id','DESC')->first();
          $mytran= new Transaction();
          $mytran->order_id=$order->id;
          $mytran->shomare_peygiri=$transactionId;
          $mytran->save();
        }
       
        )->pay();

    }


    public function verify(){

    $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
    $user=Auth::user()->id;
    $order_user =Order::where('user_id',$user)->orderBy('id','DESC')->first();
    $Amount=intval($order_user->final_price);   //Amount will be based on Toman
    // dd($Amount);
    $Authority = $_GET['Authority'];
    
    if ($_GET['Status'] == 'OK') {
    
    $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
    
    $result = $client->PaymentVerification(
    [
    'MerchantID' => $MerchantID,
    'Authority' => $Authority,
    'Amount' => $Amount,
    ]
    );
    
    if ($result->Status == 100) {
    // echo 'Transaction success. RefID:'.$result->RefID;
    return view('ticketing.final_ticket')->with('refID',$result->RefID);
    } else {
    echo 'Transaction failed. Status:'.$result->Status;
    }
    } else {
    
    echo 'Transaction canceled by user';
    }
    }


}
