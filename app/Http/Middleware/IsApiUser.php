<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class IsApiUser
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
        if($request->has('access_token')) {
            if($request->access_token !== null) {
                $user = User::where('access_token', $request->access_token)->first();
                if($user !== null) {
                    return $next($request);
                } else {
                    return response()->json("access token is not correct");
                }
            } else {
                return response()->json("access token is empty");
            }
        } else {
            return response()->json("there is no access token");
        }
    }
}
