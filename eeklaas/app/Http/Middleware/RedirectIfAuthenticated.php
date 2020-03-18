<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
//        $users=User::where('id',Auth()->user()->id)->first();
//        $roleId= $users->role_id;

        if (Auth::guard($guard)->check() && Auth()->user()->role_id== 1) {
            return redirect()->route('admin.dashboard');
        }elseif(Auth::guard($guard)->check() &&  Auth()->user()->role_id== 2){
            return redirect()->route('user.dashboard');
        }else {
            return $next($request);
        }
    }
}
