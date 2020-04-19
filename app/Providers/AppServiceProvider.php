<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Genre;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {  
         //yani moteghayerhaye cgenres,tgenres,mgenres ba tamamiye viewha share mishavad
        View::share('cgenres',Genre::where('genre_type','concert')->get());
        View::share('tgenres',Genre::where('genre_type','theatre')->get());
        View::share('mgenres',Genre::where('genre_type','movie')->get());


        //option dovom inke faghat be view haye moshakhasi moteghayero befrestim
        // View::composer( views: ['events.t_events' , 'events.single_event2'] , callback: function ($view) {
        //    $view->with('cgenres',Genre::where('genre_type','concert')->get());
        // });

       
    }
}
