<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Middleware\Authenticate;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            return redirect('/');
        }
    return $next($request);
    }
}
