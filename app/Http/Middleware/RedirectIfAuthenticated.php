<?php

namespace App\Http\Middleware;

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
    if (Auth::guard('superadmin')->check()) {

      return redirect('/superadmin/index');

    } else if (Auth::guard('mitra')->check()) {

      return redirect('/mitra/index');

    }

    return $next($request);
  }
}
