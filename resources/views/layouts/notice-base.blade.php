@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">通知</h1>
        @include($notice->message)
        <a href="{{ url('/seller/info/notice') }}">< 戻る</a>
    </div>
@endsection