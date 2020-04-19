<?php

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
Route::get('/m_events_category','FrontController@movie_eventscategory')->name('showmoviecategory');
Route::get('/t_events_category','FrontController@theatre_eventscategory')->name('showtheatrecategory');
Route::get('/c_events_category','FrontController@concert_eventscategory')->name('showconcertcategory');
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
Route::get('/seat_section','SeatController@seat_section')->name('seat_section');
Route::get('/seats','SeatController@seats')->name('seats');
Route::get('/myseat','SeatController@myseat')->name('myseat');
Route::post('/seat_reserved','SeatController@seat_reserved')->name('seat_reserved');
Route::get('/seat_sold','SeatController@seat_sold')->name('seat_sold');
Route::get('/seat_plan','SeatController@seatplan')->name('seatplan');



// ===== TicketingController ==========
Route::get('/section_select','TicketingController@section_select')->name('section_select');
Route::get('/prepay_ticket','TicketingController@prepay_ticket')->name('prepay_ticket');
Route::get('/final_ticket','TicketingController@final_ticket')->name('final_ticket');



// ======== SiteController ===========
Route::get('/tracking','SiteController@tracking')->name('tracking');
Route::get('/contactus','SiteController@contactus')->name('contactus');
Route::get('/blog','SiteController@blog')->name('blog');
Route::post('/contactus_save','SiteController@contactus_save')->name('contactus_save');
Route::post('/search_result','SiteController@search_result')->name('search_result');
Route::get('/upcoming_news','SiteController@upcoming_news')->name('upcoming');



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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//==========================arrange seats by Admin===============
Route::get('/seat_inputs', 'SeatController@index')->name('seat_inputs');
Route::post('/admin_seat', 'SeatController@adminseat')->name('admin_seat');

