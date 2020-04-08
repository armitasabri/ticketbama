<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function edit_profile(){

    }

    public function ticket_history(){

    }

    public function favourite_save(){

    }

    public function favourite_show(){
        
    }

    
}
