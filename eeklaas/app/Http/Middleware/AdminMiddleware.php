<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminMiddleware
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
//        $users=User::where('id',Auth()->user()->id)->first();
//        $roleId= $users->role_id;
        if (Auth::check() && Auth()->user()->role_id== 1){
            return $next($request);
        }else{
            return redirect()->route('login');
        }

    }
}
