@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">ユーザ情報</h1>
        <div>
            <p>ユーザID: mijumaru</p>
            <p>ユーザ名: ミジュマル</p>
            <p>性別: 男</p>
            <p>住所: hogehogeunko</p>
            <p>年齢: 6</p>
            <p>メールアドレス: hoge@hoge.com</p>
            <p>チャージ残高: 100円</p>
            <p>登録日: YYYY/MM/DD</p>
        </div>
        <div>
            <a href="" class="btn btn-primary">ユーザ情報変更</a>
        </div>
    </div>
@endsection