<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsLoginAdmin
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
        // check if sender is login
        if( Auth::check() && Auth::user()->is_admin == 1 ) 
        {
            return $next($request);
        }

        return redirect( route('books.index') );
    }
}
