<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   /* public function handle($request, Closure $next)
    {
         if(auth()->user()->is_admin == 1){
            return view('ofertas/panel');
            }
            return redirect('/')->with('error','You have not admin access');
    }*/

    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::check())
        {
            if($request->user()->is_admin == 1)
            {
               return $next($request);
            }
             return redirect('/ofertas/panel');    
        }

        return redirect('/login');
    }
}
