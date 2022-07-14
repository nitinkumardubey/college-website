<?php

namespace App\Http\Middleware;

use Closure;

class VendorloginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    
    public function handle($request, Closure $next)
    {
        if (auth()->user()->user_type != "vendor") {
            return back()->with('error','Invalid Page Request!');
        }
        return $next($request);
    }
}
