<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Contactus;
use App\Models\Blog;




class SiteController extends Controller
{
    //
    public function tracking(){

        return view('site.tracking');

    }

    public function contactus(){

        return view('site.contactus');

    }
    public function blog(){
        $blogs=Blog::all();
        return view('site.blog',compact(['blogs']));

    }

    public function contactus_save(Request $request){

        $request->validate([
            'name'=>'required|string|alpha',
            'lastname'=>'required|string|alpha',
            'email'=>'required|email',
            'mobile'=>'required|numeric|digits:11',
            'description'=>'required'
          ]);

        $name=$request->get('name');
        $lastname=$request->get('lastname');
        $mobile=$request->get('mobile');
        $email=$request->get('email');
        $description=$request->get('description');

        $contact=new Contactus();
        $contact->name=$name;
        $contact->lastname=$lastname;
        $contact->mobile=$mobile;
        $contact->email=$email;
        $contact->description=$description;
       $contact->save();
      return redirect('/contactus')->with('success','با تشکر از شما،پیام شما ثبت شد :)');

    }


    public function search_result(Request $request){
         
        // $cat=Genre::all();
        // dd($cat);
        $k=$request->get('keyword');
        // dd($k);
        $keywords=explode(" ",$k);
        // dd($keywords);
    //     $cat=Category::where('name', 'LIKE','%' .$k. '%')->first();
    //     if($cat != ""){
    //            $category_id=$cat->id; 
    //     }else{
    //         $category_id=null;
    //     }
    
    //     $genre=Genre::where('name', 'LIKE','%' .$k. '%')->first();
    //     if($genre != ""){
    //         $genre_id=$genre->id;
    //  }else{
    //      $genre_id=null;
    //  }
        
        if($keywords != " ") 
        {
            foreach($keywords as $keyword){
                $events=Event::where('title', 'LIKE','%' .$keyword. '%')
                            ->orWhere('director', 'LIKE','%' .$keyword. '%')
                            ->orWhere('cast', 'LIKE','%' .$keyword. '%')
                            ->orWhere('artist','LIKE','%'.$keyword.'%')

                            ->orWhereHas('category',function($q)use ($keyword){
                                return $q->where('name','LIKE','%'.$keyword.'%');
                            })

                            ->orWhereHas('venue',function($q)use ($keyword){
                                return $q->where('venue_name','LIKE','%'.$keyword.'%');
                            })

                            ->orWhereHas('genre',function($q)use ($keyword){
                                return $q->where('name','LIKE','%'.$keyword.'%');
                            })->get();
            }
            
            
            $m="متاسفانه رکوردی یافت نشد";
            $filmcat=Category::find('1');
            $theatrecat=Category::find('2');
            $concertcat=Category::find('3');
            return view('site.searchresult',compact(['events','filmcat','theatrecat','concertcat','m','k']));
       
        }
    }


    public function upcoming_news(){

   }

   public function noaccess(){
       return view('site.no_access');
   }
}
