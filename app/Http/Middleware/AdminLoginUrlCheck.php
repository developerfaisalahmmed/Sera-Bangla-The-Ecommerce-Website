<?php

namespace App\Http\Middleware;

use Closure;

class AdminLoginUrlCheck
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
        if (Session()->has('admin_id') && (url('/auth/admin/login') == $request->url() || url('/auth/admin/register') == $request->url() )){
            return back();
        }
        return $next($request);
    }
}
