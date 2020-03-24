<?php

namespace App\Http\Middleware;

use Closure;

class ExampleMiddleware
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
        if(preg_match("/benjamin$/i",$request->getRequestUri())){
            return response('YOU SHALL NOT Name enjamin In here!', 403);
        }
        return $next($request);
    }
}
