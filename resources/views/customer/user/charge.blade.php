@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">チャージ</h1>
        <form method="POST" action="{{ url('/customer/user/charge') }}">
            @csrf
            <input type="text" name="prepaid_number" placeholder="プリペイド番号（10桁）" class="form-control col-md-3 d-inline" maxlength="13" required autofocus>
            <button type="submit" class="btn btn-primary ml-1">登録</button>
        </form>
        <p>{{ session('success_msg') }}</p>
        @if ($errors->has('prepaid_number'))
            <p class="text-danger">{{ $errors->first('prepaid_number') }}</p>
        @endif
    </div>
@endsection