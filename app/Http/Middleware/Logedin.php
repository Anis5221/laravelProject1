<?php

namespace App\Http\Middleware;

use Closure;

class Logedin
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
        if($request->log =='anis'){
            return redirect('welcome');
        }
        return $next($request);
    }
}
