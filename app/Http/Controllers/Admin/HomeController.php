<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Comment;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\To_do_list;

class HomeController extends Controller
{
    //

    public function __construct()
    {
           $this->middleware('ifadmin');
    }
    public function index(){
              $events=Event::count();
              $comments=Comment::where('cstatuses_id',null)->count();
              
              $three_days_ago=Carbon::now()->addDays(-3)->toDateTimeString();
              $five_days_ago=Carbon::now()->addDays(-5)->toDateTimeString();
              $two_months_ago=Carbon::now()->subMonth(2)->toDateTimeString();
              $allcomments=Comment::where('created_at','>=' ,$two_months_ago)->count();
              $orders=Order::where('created_at','>=' ,$five_days_ago)->count();

              $recent_events=Event::where('created_at','>=' ,$three_days_ago)->count();
            //   dd($recent_events);
 
          
            
            $user=Auth::user()->id;
            $user=User::find($user);
            $tasks=$user->to_do_list;
        return view('admin_home',compact(['orders','events','comments','allcomments','recent_events','tasks']));
    }
}
