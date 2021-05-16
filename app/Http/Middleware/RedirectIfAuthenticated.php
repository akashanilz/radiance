<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (! Auth::guard($guard)->check()) {

            return $next($request);
        }
        if (Auth::user()->hasRole('Admin')) {
            return \Redirect::to('dashboard');
        }
        if (Auth::user()->hasRole('Receptionist|Case Manager')) {
            return \Redirect::to('notice-boards');
        }

        return \Redirect::to('employee/notice-board');


        return redirect(RouteServiceProvider::HOME);
    }
}
