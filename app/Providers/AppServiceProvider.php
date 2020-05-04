<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Genre;
use Illuminate\Support\Facades\View;
use App\Models\Order;
use App\Models\User;
use App\Models\Comment;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\To_do_list;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){

            //  $events=Event::count();
            //   $comments=Comment::where('cstatuses_id',null)->count();
              
              $three_days_ago=Carbon::now()->addDays(-3)->toDateTimeString();
              $five_days_ago=Carbon::now()->addDays(-5)->toDateTimeString();
              $two_months_ago=Carbon::now()->subMonth(2)->toDateTimeString();
            //   $allcomments=Comment::where('created_at','>=' ,$two_months_ago)->count();
            //   $orders=Order::where('created_at','>=' ,$five_days_ago)->count();

            //   $recent_events=Event::where('created_at','>=' ,$three_days_ago)->count();
           

           
   
         //yani moteghayerhaye cgenres,tgenres,mgenres ba tamamiye viewha share mishavad
        View::share('cgenres',Genre::where('genre_type','concert')->get());
        View::share('tgenres',Genre::where('genre_type','theatre')->get());
        View::share('mgenres',Genre::where('genre_type','movie')->get());
        // View::share('events',Event::count());
        View::share('comments',Comment::where('cstatuses_id',null)->count());
        // View::share('allcomments',Comment::where('created_at','>=' ,$two_months_ago)->count());
        // View::share('orders',Order::where('created_at','>=' ,$five_days_ago)->count());
        // View::share('recent_events',Event::where('created_at','>=' ,$three_days_ago)->count());
       


        //option dovom inke faghat be view haye moshakhasi moteghayero befrestim
        // View::composer( views: ['events.t_events' , 'events.single_event2'] , callback: function ($view) {
        //    $view->with('cgenres',Genre::where('genre_type','concert')->get());
        // });

       
    }
}
