<?php

namespace App\Http\Middleware;

use Closure;

class auth
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
        if(session()->has('user')==false){
            return redirect()->route('login');
        }
//        if ($request->session())
        return $next($request);
    }
}
