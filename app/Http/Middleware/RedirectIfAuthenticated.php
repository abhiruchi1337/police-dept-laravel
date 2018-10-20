<?php

namespace App\Http\Middleware;
// use Auth; 
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
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->type==1){
                return redirect('/user');
            }elseif(Auth::user()->type==2){
                return redirect('/officer');
            }
            else{
                return redirect('/senior');
            }   
        }

        return $next($request);
    }
}
