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
use DB;
use Charts;
use App\Charts\DailyIncome;


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
              //  dd($orders);
              $recent_events=Event::where('created_at','>=' ,$three_days_ago)->count();
            //   dd($recent_events);
 
          
            
            $user=Auth::user()->id;
            $user=User::find($user);
            $tasks=$user->to_do_list;




            $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name','day')
            ->orderBy('day')
            ->get();
          
            //  $data = [];
         
             foreach($record as $row) {
                $data['label'][] = $row->day_name;
                $data['data'][] = (int) $row->count;
              }
         
            $data['chart_data'] = json_encode($data);
            

           




            $today_orders = Order::whereDate('created_at', today())->count();
            $yesterday_orders = Order::whereDate('created_at', today()->subDays(1))->count();
            $orders_7_days_ago = Order::whereDate('created_at', today()->subDays(5))->count();

            $order_income=Order::orderBy('created_at')->pluck('final_price','created_at');

            $chart = new DailyIncome;
            
            $chart->labels($order_income->keys());
            $chart->dataset('سفارشات و قیمت آن‌ها', 'bar', $order_income->values())->options([
              'tooltip' => [
                  'show' => true 
              ],
              'backgroundColor'=>'#6EC88B',
              
          ]);
            // ->backgroundColor('');
       

                $all_income=Order::sum('final_price');
                $all_income=intval($all_income);

        return view('admin_home',$data,compact(['orders','events','comments'
        ,'allcomments','recent_events','tasks','chart','all_income']));
    }
}
