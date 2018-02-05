<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware
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
        if($request->id > 5)
        {
            return $next($request);
        }
      // return redirect('/');
        return response('You can see this after failure of middleware check.', 401);
    }
}
