<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \Closure  $next
    //  * @return mixed
    //  */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }

    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
   

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->user_type != "admin") {
            return back()->with('error','Invalid Page Request!');
        }

        return $next($request);
    }
} 

