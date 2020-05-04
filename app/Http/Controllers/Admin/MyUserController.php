<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyUserController extends Controller
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
        $users=User::all();
        return view('admin.users.users',compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $roles=Role::all();
        return view('admin.users.add_user',compact(['roles']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User();
        $user->name=$request->get('name');
       
        $role=$request->get('roles');
        
        $roles=Role::where('name',$role)->first();
        $user->role_id=$roles->id;
        // dd($a);
        $user->email=$request->get('email');
        $user->password=$request->get('password');
        $user->mobile=$request->get('mobile');
        $file=$request->file('file');
        if($file):
            $imagename= $file->getClientOriginalName();
            $file->move('assets/img/avatars',$imagename);
            $user->fileimage=$imagename;  
        endif;
        $user->save();
        $user->Photo()->create([
            'imageable_id'=>Auth::user()->id,
            'imageable_type'=>'App\Models\User', 
            'path'=>$imagename
        ]);
        
        
       
        return redirect('admin/myusers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($myuser){

        $user=User::find($myuser);
        $roles=Role::all();
        return view('admin.users.edit_users',compact(['user','roles']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {  
        $id=$request->get('id');
        $user=User::find($id);
        $id=$user->id=$user->id;
        $user->name=$request->post('name');
        $user->email=$request->get('email');
        $user->mobile=$request->get('mobile');
        $user->password=$request->get('password');
        $role=$request->get('roles');
        $mrole=Role::where('name',$role)->first();
        $user->role_id=$mrole->id;
    $fileimage=$request->file('file');
    if($fileimage){
        $imagename= $fileimage->getClientOriginalName();
        $fileimage->move('assets/img/avatars',$imagename);
        $user->fileimage=$imagename;
      $photo=Photo::where('imageable_id',$id)->first();
    if(!$photo == null){$photo->path=$imagename;
        $photo->save();}
        else{
            $user->Photo()->create([
                'imageable_id'=>Auth::user()->id,
                'imageable_type'=>'App\Models\User', 
                'path'=>$imagename
            ]);
        }
      
    
    } 
        $user->save();
        return redirect('admin/myusers');
    
}
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($myuser)
    {     
        // dd('here');
       User::find($myuser)->delete();
        return redirect('admin/myusers');
        
    }
}
