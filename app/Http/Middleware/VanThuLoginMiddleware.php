<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VanThuLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      if ( Auth::guard($guard)->check() && ( Auth::user()->quyenhan_id == 4 || Auth::user()->quyenhan_id == 6 ) ) {

        return $next($request);

      }else{

        return redirect('access-denied');

      }
    }
}
