<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>
            @yield('title')
        </title>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="text-center mt-5">
                <h1 class="h1">
                    @yield('content')
                </h1>
                @if (Auth::check())
                    @if (Auth::user()->type === 'admin')
                        <a href="{{ url('/admin/product') }}">HOME</a>
                    @elseif (Auth::user()->type === 'seller')
                        <a href="{{ url('/seller/product') }}">HOME</a>
                    @elseif (Auth::user()->type === 'customer')
                        <a href="{{ url('/customer/product') }}">HOME</a>
                    @endif
                @else
                    <a href="{{ url('/') }}">TOP</a>
                @endif
            </div>
        </div>
    </body>
</html>