@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">通知</h1>
        @include($notice->message)
        @if (Auth::user()->type === 'admin' || Auth::user()->type === 'employee')
            <a href="{{ url('/admin/info/notice') }}">< 戻る</a>
        @endif
        @seller (Auth::user()->type)
            <a href="{{ url('/seller/info/notice') }}">< 戻る</a>
        @endseller
    </div>
@endsection