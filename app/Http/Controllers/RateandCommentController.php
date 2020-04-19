<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Comment;

class RateandCommentController extends Controller
{
    //
    public function comment(Request $request){

        $id=$request->get('event_id');
         $event=Event::find($id);
         $userid=$request->get('user_id'); 
         $comment=new Comment();
         
         $comment->comment=$request->get('comment');
         $comment->events_id=$event->id;
         if($userid !== null){
             $user=User::find($userid);
            $comment->fullname=$request->get('name');
             $comment->users_id=$user->id;
         }else{
             $comment->users_id=null;
              $comment->fullname='ناشناس';
         }
         $comment->save();
         $message="با تشکر از شما، نظر شما پس از بازخوانی منتشر می‌شود.";
         return redirect('single_event/'.$event->id)->with('success',$message);
    }

    public function mycomments($id){

        $user_comment=Comment::where('users_id',$id)->get();
        // dd($user_comment);
        // $mycomment=$user_comment->comment;
        // $eventid=$user_comment->events_id;
        // $event=Event::where('id',$eventid)->get();
        // dd($event);
        return view('userpages.mycomments')->with('mycomments',$user_comment);
    }

    public function rate_save(){
        
    }

    public function rate_show(){
        
    }
}
