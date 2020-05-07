<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider_image;
use App\Models\Event;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=Slider_image::all();
        return view('admin.slider.manage_slider')->with('images',$images);
    }
    

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.slider.slider');
    // }

    public function create()
    {

      $events=Event::all();
        return view('admin.slider.slider1',compact(['events']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request){

    //       dd('hi!hello');
    //    $sfile=$request->file('file');
    //     dd($sfile);
    //     
    // foreach($files as $file){
    //     Slider_image::create([
    //       'fileimage'=>$file->getClientOriginalName()
    //     ]);
    // }
    // }

    public function store(Request $request){
      
      $event=$request->get('event');
      $event=Event::where('title',$event)->first();
      $slider=new Slider_image();
      $slider->event_id=$event->id;
      $file=$request->file('file');
      $imagename=$file->getClientOriginalName();
      $file->move('assets/img/movie-posters',$imagename);
       $slider->fileimage=$imagename; 
      $image=Image::make(public_path("assets/img/movie-posters/{$imagename}"))->fit(2780,2780);
      $image->save(); 
      $slider->save();
      return redirect('admin/slider');
    }

    public function dropzone(Request $request){

        // dd('hi!hello');
     $file=$request->file('file');
     $slider=new Slider_image();
     $imageName=$file->getClientOriginalName();
       $slider->fileimage=$imageName;
       
       $slider->save();

    //  return redirect('admin/slider/create');
     return response()->json(['success'=>$imageName]);
  }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider_image  $slider_image
     * @return \Illuminate\Http\Response
     */
    public function show(Slider_image $slider_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider_image  $slider_image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $image=Slider_image::where('id',$id)->first();
        return view('admin.slider.edit_slider',compact(['image']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider_image  $slider_image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id=$request->get('id');
        $slider=Slider_image::find($id)->first();
        $file=$request->file('file');
        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      $imagename=$file->getClientOriginalName();
      $img=$file->resize(2780, 2780);
      $img->move('assets/img/movie-posters',$imagename);
      $slider->fileimage=$imagename;     
      $slider->save();
      return redirect('admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider_image  $slider_image
     * @return \Illuminate\Http\Response
     */
    public function destroy($slider)
    {
        // dd($slider);
        Slider_image::find($slider)->delete();
      return redirect('admin/slider');


    }
}
