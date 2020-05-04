<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Hall;
use App\Models\Hall_sanse;
use App\Models\Sanse;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
           $this->middleware('ifadmin');
    }

    
    public function index()
    {
        $events=Event::all();
        return view('admin.events.events',compact(['events']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories=Category::all();
        $genres=Genre::all();
        $halls=Hall::all();
        $sanses=Sanse::all();
        return view('admin.events.add_event',compact(['categories','genres','halls','sanses']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event=new Event();
        $event->title=$request->get('title');
        
        $event->event_date=$request->get('date');
        $categories=$request->get('categories');
        $cat=Category::where('name',$categories)->first();
        $event->categories_id=$cat->id;
        // dd($a);
        $event->director=$request->get('director');
        $event->duration_minute=$request->get('duration');
        $event->description=$request->get('description');
        $sanse_name=$request->get('sanses');
        $sanse=Sanse::where('name',$sanse_name)->first();
        $event->sanses_id=$sanse->id;
        $hall_name=$request->get('halls');
        $hall=Hall::where('name',$hall_name)->first();
        $event->halls_id=$hall->id;
        
        $event->cast=$request->get('cast');
        $genre_name=$request->get('genres');
        $genre=Genre::where('name',$genre_name)->first();
        $event->genres_id=$genre->id;
        $event->artist=$request->get('artist');
        $sfile=$request->file('singlefile');
        // dd($sfile);
        if($sfile):
            $imagename= $sfile->getClientOriginalName();
            $sfile->move('assets/img/feature-movies',$imagename);
            $event->fileimage=$imagename;  
        endif;

          $event->save();
        $files=$request->file('file');
        if($files):
            foreach($files as $file):
            $imagename= $file->getClientOriginalName();
            $file->move('assets/img/feature-movies',$imagename);
            $event->fileimage=$imagename;
            $event->Photo()->create([
            'imageable_id'=>$event->id,
            'imageable_type'=>'App\Models\Event', 
            'path'=>$imagename
        ]);
        endforeach;
        
        endif;

        $hall_sanse=new Hall_sanse();
        $hall_sanse->hall_id=$hall->id;
        $hall_sanse->sanse_id=$sanse->id;
        $hall_sanse->event_id=$event->id;
        $hall_sanse->save();
        return redirect('admin/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit( $myevent)
    {    
        //  dd($myevent);
        $event=Event::find($myevent);
        $categories=Category::all();
        $genres=Genre::all();
        $hall_sanses=Hall_sanse::where('event_id',$event->id)->get();
        // dd($halls);
        // $sanses=Sanse::all();
        return view('admin.events.edit_event',compact(['event','categories','genres','hall_sanses']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $event=$request->get('myevent');
       $event=Event::find($event);
       $event->title=$request->get('title');
        $event->event_date=$request->get('date');
        $categories=$request->get('categories');
        $cat=Category::where('name',$categories)->first();
        $event->categories_id=$cat->id;
        $event->director=$request->get('director');
        $event->duration_minute=$request->get('duration');
        $event->description=$request->get('description');
        $sanse_name=$request->get('sanses');
        $sanse=Sanse::where('name',$sanse_name)->first();
        $event->sanses_id=$sanse->id;
        $hall_name=$request->get('halls');
        $hall=Hall::where('name',$hall_name)->first();
        $event->halls_id=$hall->id;
        $event->cast=$request->get('cast');
        $genre_name=$request->get('genres');
        $genre=Genre::where('name',$genre_name)->first();
        $event->genres_id=$genre->id;
        $event->artist=$request->get('artist');
        

          $event->save();
        $files=$request->file('file');
        
        return redirect('admin/events');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy( $event)
    {
       $event=Event::find($event)->delete();
       return redirect('admin/events');
    }
}
