<?php

namespace App\Http\Middleware;

use Closure;
use Auth; 
use App\HelperFunctions;
class User
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
        if (Auth::check() && Auth::user()->type == HelperFunctions::getTypeInt('officer')) {
            return redirect('/officer');
        }
        elseif (Auth::check() && Auth::user()->type == HelperFunctions::getTypeInt('user')) {
            return $next($request);
        }
        else{
            return redirect('/senior');
        }
    }
}
