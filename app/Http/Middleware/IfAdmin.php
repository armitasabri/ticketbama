<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $auth=auth::check();
        if($auth === false){
            return redirect ('/login');
        }else{

            $user1 = Auth::user()->role_id;
            if($user1 === 1){
             return $next($request);   
            }else{
               return redirect('/access_denied');
            }
        
    }

}
}
