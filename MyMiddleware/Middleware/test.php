<?php

namespace App\Http\Middleware;

use Closure;

class test
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
       $ip = $request->ip();                           //user's IP address
       //$ip = '192.168.1.1';                           // for testing any live server's IP address
        if($ip == '::1'){                                              
            return redirect('/');                        // redirect to home page
        }
        
        
        return $next($request);
    }
}
