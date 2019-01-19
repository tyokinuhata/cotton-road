@extends('layouts.errors-base')

@section('title')
    404 Not Found
@endsection

@section('content')
    <h1 class="h1">404 Not Found! 残念でした&#x1F595;&#x1f4a9;</h1>
    @if (Auth::check())
        @admin (Auth::user()->type)
            <a href="{{ url('/admin/products') }}">ホームへ戻る</a>
        @endadmin
        @employee (Auth::user()->type)
            <a href="{{ url('/admin/products') }}">ホームへ戻る</a>
        @endemployee
        @seller (Auth::user()->type)
            <a href="{{ url('/seller/products') }}">ホームへ戻る</a>
        @endseller
        @customer (Auth::user()->type)
            <a href="{{ url('/customer/products') }}">ホームへ戻る</a>
        @endcustomer
    @else
        <a href="{{ url('/') }}">トップへ戻る</a>
    @endif
@endsection