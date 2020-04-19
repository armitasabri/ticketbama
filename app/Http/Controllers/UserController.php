<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    public function profile(){
        return view('userpages.profile');
    }

    public function register(){
        return view('userpages.register');
    }

    public function login(){
        return view('userpages.login');
    }
    
    public function edit_profile($id){
        
       $user=User::find($id);
    //    dd($user);
       return view('userpages.editprofile')->with('user',$user);
    }


    public function save_profile(Request $request){

        $id=$request->get('id');
        $user=User::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->mobile=$request->get('mobile');
        $user->password=$request->get('password');
        $user->save();
        return redirect('profile');

    }


    public function ticket_history(){

    }

    public function favourite_save(){

    }

    public function favourite_show(){
        
    }

    
}
