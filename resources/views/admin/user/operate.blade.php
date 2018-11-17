@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ユーザ操作</h1>
        <form method="POST" action="">
            @csrf
            <input type="text" placeholder="ユーザID" class="form-control col-md-8 d-inline mb-4 mr-2" autofocus>
            <button type="submit" class="btn btn-primary">検索</button>
        </form>
        <table class="table">
            <tr>
                <td>ユーザID</td>
                <td>mijumaru</td>
            </tr>
            <tr>
                <td>ユーザ名</td>
                <td>ミジュマル</td>
            </tr>
            <tr>
                <td>性別</td>
                <td>男</td>
            </tr>
            <tr>
                <td>住所</td>
                <td>hogehogeunko</td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>6</td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>hoge@hoge.com</td>
            </tr>
            <tr>
                <td>チャージ残高</td>
                <td>¥100</td>
            </tr>
            <tr>
                <td>登録日</td>
                <td>YYYY/MM/DD</td>
            </tr>
        </table>
        <div>
            <a href="#" class="btn btn-primary">購入履歴</a>
            <a href="#" class="btn btn-warning">編集</a>
            <button type="submit" class="btn btn-danger">退会</button>
        </div>
    </div>
@endsection