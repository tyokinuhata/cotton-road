<?php

namespace App\Http\Middleware;

//use Illuminate\Http\Request;
use Closure;
use Auth;
use Request;

/**
 * 認証済みユーザが任意のページにアクセスできないようにするミドルウェア
 *
 * Class AccessAuthUsersGuards
 * @package App\Http\Middleware
 */
class AccessAuthUsersGuards
{
    /**
     * 認証済みユーザのアクセスを許可しないルート
     *
     * @var array
     */
    protected $urls = [ '/', 'login', 'register' ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 認証済みかどうか
        if (!Auth::check()) {
            return $next($request);
        }

        // 該当するURLがあるかどうか
        $flg = false;
        foreach ($this->urls as $url) {
            if ($url === Request::path()) {
                $flg = true;
            }
        }

        // リダイレクト
        if ($flg) {
            if (Auth::user()->type === 'admin' || Auth::user()->type === 'employee') {
                return redirect('admin/products');
            }
            if (Auth::user()->type === 'seller') {
                return redirect('seller/products');
            }
            if (Auth::user()->type === 'customer') {
                return redirect('customer/products');
            }
        }

        return $next($request);
    }
}
