<?php

namespace App\Http\Middleware;

use Closure;
use Auth; 
use App\HelperFunctions;
class SeniorOfficer
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
        if (Auth::check() && (Auth::user()->type == HelperFunctions::getTypeInt('senior'))) {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->type == HelperFunctions::getTypeInt('user')) {
            return redirect('/user');
        }
        else{
            return redirect('/officer');
        }
    }
}
