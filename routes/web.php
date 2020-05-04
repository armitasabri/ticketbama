<?php
use Shetabit\Payment\Invoice;
use App\Jobs\CheckSeatsJob;
use Shetabit\Payment\Facade\Payment;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/blog','FrontController@blog')->name('blog');
// Route::get('/contact_with_us','FrontController@contactus')->name('contactus');
// Route::get('/m_events_category','FrontController@movie_eventscategory')->name('showmoviecategory');
// Route::get('/t_events_category','FrontController@theatre_eventscategory')->name('showtheatrecategory');
// Route::get('/c_events_category','FrontController@concert_eventscategory')->name('showconcertcategory');
// Route::get('/single_event','FrontController@single_event')->name('single_event');
// Route::get('/seat_section','FrontController@seat_section')->name('seat_section');
// Route::get('/seats','FrontController@seats')->name('seats');
// Route::get('/tracking','FrontController@tracking')->name('tracking');
// Route::get('/final_ticket','FrontController@final_ticket')->name('final_ticket');
// Route::get('/prepay_ticket','FrontController@prepay_ticket')->name('prepay_ticket');
// Route::get('/select_section','FrontController@select_section')->name('select_section');
// Route::get('/login','FrontController@login')->name('login');
// Route::get('/register','FrontController@register')->name('register');
// Route::get('/profile','FrontController@profile')->name('profile');
// Route::get('/','HomeController@index');








Route::get('/','HomeController@index')->name('home');
// Route::get('/myhome','HomeController@index');

// ====== EventController ============
Route::get('/single_event/{id}','EventController@single_event')->name('single_event');
Route::get('/single_event_concert/{id}','EventController@single_event_concert')->name('single_event_concert');
Route::get('/single_event_theatre/{id}','EventController@single_event_theatre')->name('single_event_theatre');
Route::get('/m_events/{id}','EventController@m_events')->name('m_events');
Route::get('/t_events/{id}','EventController@t_events')->name('t_events');
Route::get('/c_events/{id}','EventController@c_events')->name('c_events');
Route::get('/best_sellers','EventController@best_sellers')->name('best_sellers');
Route::get('/popular_events/{id}','EventController@popular_events')->name('popular_events');
Route::get('/all_movies','EventController@allmovies')->name('allmovies');
Route::get('/all_theatres','EventController@alltheatres')->name('alltheatres');
Route::get('/all_concerts','EventController@allconcerts')->name('allconcerts');
Route::get('/all_populars','EventController@allpopulars')->name('allpopulars');




// ====== SeatController =============
Route::get('/seat_section/{id}','SeatController@seat_section')->name('seat_section');
Route::get('/seat_section_view/{id}','SeatController@seat_section_view')->name('seat_section_view');
Route::get('/seats/{id}/{section}/{price}/{order_id}','SeatController@seats')->name('seats');
Route::get('/myseat','SeatController@myseat')->name('myseat');
Route::post('/seat_reserved','SeatController@seat_reserved')->name('seat_reserved');
Route::post('/seat_sold','SeatController@seat_sold')->name('seat_sold');
Route::get('/seat_plan','SeatController@seatplan')->name('seatplan');
Route::get('/seat_job','SeatController@seat_Job')->name('seat_job');
// Route::get('/seat_job',function(){
//     $job=(new CheckSeatsJob())->delay(Carbon::now()->addSeconds(10));
//     dispatch($job);
//     return "job is done!";
// });
Route::get('/seats_only_for_view/{id}/{section}','SeatController@seats_view')->name('seats_view');



// ===== TicketingController ==========
Route::get('/section_select/{id}','TicketingController@section_select')->name('section_select');
Route::get('/prepay_ticket/{id}','TicketingController@prepay_ticket')->name('prepay_ticket');
Route::get('/final_ticket/{fee}/{hall_sanse}/{place}','TicketingController@final_ticket')->name('final_ticket');
Route::get('/show_ticket/{order_id}','TicketingController@print_ticket')->name('user_ticket');

Route::get('/verify','TicketingController@verify');
    




// ======== SiteController ===========
Route::get('/tracking','SiteController@tracking')->name('tracking');
Route::get('/contactus','SiteController@contactus')->name('contactus');
Route::get('/blog','SiteController@blog')->name('blog');
Route::post('/contactus_save','SiteController@contactus_save')->name('contactus_save');
Route::post('/search_result','SiteController@search_result')->name('search_result');
Route::get('/upcoming_news','SiteController@upcoming_news')->name('upcoming');
Route::get('/access_denied','SiteController@noaccess');




// ======== UserController ============
Route::get('/profile','UserController@profile')->name('profile');
Route::get('/ticket_history','UserController@profile')->name('ticket_history');
Route::get('/edit_profile/{id}','UserController@edit_profile')->name('edit_profile');
Route::post('edit_profile/save_profile','UserController@save_profile')->name('save_profile');
Route::get('/favourite_save','UserController@favourite_save')->name('favourite_save');
Route::get('/favourite_show','UserController@favourite_show')->name('favourite_show');
Route::get('/myregister','UserController@register')->name('myregister');
Route::get('/mylogin','UserController@login')->name('mylogin');


 // ======== RateandCommentController =========
 Route::post('/comment','RateandCommentController@comment')->name('comment');
 Route::get('/user_comments/{id}','RateandCommentController@mycomments')->name('user_comments');

 Route::get('/rate_save','RateandCommentController@rate_save')->name('rate_save');
 Route::get('/rate_show','RateandCommentController@rate_show')->name('rate_show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/laravelhome', 'HomeController@index2')->name('l_home');


// =================== Voyager Extension ================= //
// Route::group(['prefix' => 'voy'], function () {
//     Voyager::routes();
// });


//==========================arrange seats by Admin===============
Route::get('/seat_inputs', 'SeatController@index')->name('seat_inputs');
Route::post('/admin_seat', 'SeatController@adminseat')->name('admin_seat');
Route::post('/created_plan', 'SeatController@created_plan')->name('created_plan');
Route::get('/final_view', 'SeatController@finalview')->name('final_view');




// ======================= Admin Controllers ========================= //

// Route::get('/admin_home', 'Admin\HomeController@index')->name('admin_home');

Route::namespace('Admin')->prefix('admin')->name('admin_')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/myusers', 'MyUserController');
    Route::get('/delete_my_user/{myuser}','MyUserController@destroy');
    Route::get('/edit_my_user/{myuser}','MyUserController@edit');
    Route::post('edit_my_user/update_my_user','MyUserController@update');
    Route::get('/edit_my_event/{myevent}','EventController@edit');
    Route::post('/edit_my_event/update_my_event','EventController@update');
    Route::get('/delete_my_event/{event}','EventController@destroy');
    Route::resource('/orders', 'OrderController');
    Route::resource('/comments', 'CommentController');
    Route::get('/delete_my_comment/{comment}','CommentController@destroy');
    Route::get('/edit_my_comment/{comment}','CommentController@edit');
    Route::post('/edit_my_comment/update_my_comment','CommentController@update');
    Route::get('/comment_datatables', 'CommentController@datatable')->name('comments.datatable');
    Route::resource('/events', 'EventController');
    Route::get('/input_seats', 'SeatController@index')->name('input_seats');
    Route::get('/findvenuehalls','SeatController@find_venue_halls')->name('find_venue_halls');
    Route::get('/findhallseatsections','SeatController@find_hall_seatsection')->name('find_hall_seatsections');
    Route::post('/insert', 'SeatController@insertseat')->name('insert_seat');
    Route::post('/make_seat_plan', 'SeatController@make_seat_plan')->name('seat_plan');
    Route::get('/calendar','PublicController@calendar')->name('calendar');
    Route::get('/new_task','PublicController@new_task')->name('new_task');
    Route::post('/add_task','PublicController@add_task')->name('add_task');




    


 });
