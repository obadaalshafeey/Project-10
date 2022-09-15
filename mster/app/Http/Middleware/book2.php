<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class book2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session()->has('data') ){
            return redirect('/book1')->with('fail2','Choose time');
        }
        return $next($request);
    }
}
