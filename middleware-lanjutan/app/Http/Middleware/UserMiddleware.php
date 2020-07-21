<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
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
        if ($request->route()->named('route1') && \Auth::user()->isSuperAdmin()) {
            return $next($request);
        }elseif ($request->route()->named('route2') && \Auth::user()->isAdmin() || \Auth::user()->isSuperAdmin()) {
            return $next($request);
        }

        abort(403, 'Hanya Bisa Diakses Oleh Admin');
    }
}
