<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if (!auth()->check() || (!$request->expectsJson() && !auth()->user()->is_admin)) {
        //     return redirect()->back();
        // }

        // return $next($request);

        if(Auth::user() && Auth::user()->is_admin) {
            return $next($request);
        }

        abort(404);
        // return redirect()->back();
    }
}
