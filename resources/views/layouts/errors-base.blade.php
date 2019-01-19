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
                @yield('content')
            </div>
        </div>
    </body>
</html>