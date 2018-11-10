<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserTypeFiliter
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

        $url = explode('/', url()->current())[3];
        $type = Auth::user()->type;

        if ($type !== $url) {
            return redirect("/$type/product");
        }

        return $next($request);
    }
}
