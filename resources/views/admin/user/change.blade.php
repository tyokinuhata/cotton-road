@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">ユーザ情報編集</h1>
        <div>
            <div>
                <label for="">ユーザID</label>
                <input type="text" class="form-control">
            </div>
            <div>
                <label for="">ユーザ名</label>
                <input type="text" class="form-control">
            </div>
            <div>
                <label for="">性別</label>
                <input type="radio" class="man"> 男
                <input type="radio" class="woman"> 女
                <input type="radio" class="other"> その他
            </div>
            <div>
                <label for="">住所</label>
                <input type="text" class="form-control">
            </div>
            <div>
                <label for="">年齢</label>
                <input type="number" class="form-control">
            </div>
            <div>
                <label for="">メールアドレス</label>
                <input type="email" class="form-control">
            </div>
        </div>
        <div>
            <a href="" class="btn btn-primary">ユーザ情報変更</a>
        </div>
    </div>
@endsection