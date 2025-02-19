<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminIntructor
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
        if(Auth::User()->role == "admin" || Auth::User()->role == "instructor")
        {
            return $next($request);
        }
        else{
            abort(404, 'Page Not Found.');
        }
    }
}
