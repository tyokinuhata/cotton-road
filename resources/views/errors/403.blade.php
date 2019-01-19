@extends('layouts.errors-base')

@section('title')
    403 Forbidden
@endsection

@section('content')
    <h1 class="h1">403 Forbidden! 見ちゃダメ&#x1f46e;&#x1f645;</h1>
    @if (Auth::check())
        @admin (Auth::user()->type)
            <a href="{{ url('/admin/products') }}">ホームへ戻る</a>
        @endadmin
        @seller (Auth::user()->type)
            <a href="{{ url('/seller/products') }}">ホームへ戻る</a>
        @endseller
        @customer (Auth::user()->type === 'customer')
            <a href="{{ url('/customer/products') }}">ホームへ戻る</a>
        @endcustomer
    @else
        <a href="{{ url('/') }}">トップへ戻る</a>
    @endif
@endsection