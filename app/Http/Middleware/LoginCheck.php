<?php

namespace App\Http\Middleware;

use Closure;
USE Session;

class LoginCheck
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
        $admin_name = Session::get('admin_name');

        if($admin_name){
            //return;
           return $next($request);
        }else{
             return redirect(route('admin.login'))->send();
        }



    }
}
