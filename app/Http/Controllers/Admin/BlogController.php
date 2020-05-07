<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use App\Models\Event;
use App\Models\Role;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $blogs=Blog::all();
       return view('admin.blog.blogs',compact(['blogs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events=Event::all();
        
        $bloggers_role=Role::where('name','blogger')->first();
        $bloggers=User::where('role_id',$bloggers_role->id)->get();
      
        return view('admin.blog.new_blog',compact(['bloggers','events']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog= new Blog();
        $blog->title=$request->get('title');
        $blog->description=$request->get('description');
        $blog->news_date=$request->get('date');
        $aks=$request->file('file');
        $user=$request->get('blogger');
        $event=$request->get('events');
        $find_user=User::where('name',$user)->first();
        $blog->user_id=$find_user->id;
        $find_event=Event::where('title',$event)->first();
        $blog->event_id=$find_event->id;
        // dd($aks);
        if($aks){
            $imagename= $aks->getClientOriginalName();
            $aks->move('assets/img/blog',$imagename);
            $blog->image=$imagename;
        }
   $blog->save();
   return redirect('admin/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $events=Event::all();
        $bloggers_role=Role::where('name','blogger')->first();
        $bloggers=User::where('role_id',$bloggers_role->id)->get();
       return view('admin.blog.edit_blog',compact(['blog','events','bloggers']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blog=$request->get('blog');
        $blog=Blog::find($blog);
        $blog->title=$request->get('title');
        $blog->description=$request->get('description');
        $blog->news_date=$request->get('date');
        $aks=$request->file('file');
        $user=$request->get('blogger');
        $event=$request->get('events');
        // dd($event);
        $find_user=User::where('name',$user)->first();
        $blog->user_id=$find_user->id;
        if($event !== null){
            $find_event=Event::where('title',$event)->first();
        $blog->event_id=$find_event->id;  
        }
      else{
          $blog->event_id=null;
      }
        // dd($aks);
        if($aks){
            $imagename= $aks->getClientOriginalName();
            $aks->move('assets/img/blog',$imagename);
            $blog->image=$imagename;
        }
   $blog->save();
   return redirect('admin/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('admin/blogs');
    }
}
