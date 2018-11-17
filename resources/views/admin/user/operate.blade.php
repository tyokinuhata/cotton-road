@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ユーザ操作</h1>
        <div>
            <form method="POST" action="">
                @csrf
                <input type="text" placeholder="ユーザID" class="form-control col-md-8 d-inline mb-4 mr-2" autofocus>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
            <table class="table">
                <tr>
                    <th>ユーザID</th>
                    <td>mijumaru</td>
                </tr>
                <tr>
                    <th>ユーザ名</th>
                    <td>ミジュマル</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>男</td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>hogehogeunko</td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>6</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>hoge&#64;hoge.com</td>
                </tr>
                <tr>
                    <th>チャージ残高</th>
                    <td>¥100</td>
                </tr>
                <tr>
                    <th>登録日</th>
                    <td>YYYY/MM/DD</td>
                </tr>
            </table>
            <div>
                <a href="#" class="btn btn-primary">購入履歴</a>
                <a href="#" class="btn btn-warning">編集</a>
                <button type="submit" class="btn btn-danger">退会</button>
            </div>
        </div>
    </div>
@endsection