<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\To_do_list;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    public function calendar(){

        return view('admin.calendar');
    }

    public function new_task(){
        
        return view('admin.new_task');
    }

    public function add_task(Request $request){
       $task= $request->get('task');
        $ta=new To_do_list();
        $ta->task=$task;
        $ta->save();
        $user=Auth::user()->id;
        $user=User::find($user);
        $user->To_do_list()->attach($ta);
        return redirect('admin/home');
    }
}
