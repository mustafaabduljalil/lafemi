<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class NiceArtisan
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
        $user = $request->user();

        if ($user && Auth::user()->hasRole('admin')) {
            return $next($request);
        }

        return redirect('/');
    }
}