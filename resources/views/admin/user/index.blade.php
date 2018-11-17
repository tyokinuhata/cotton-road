@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">ユーザ情報</h1>
        <div>
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
                <a href="{{ url('/admin/user/change') }}">ユーザ情報編集</a>
            </div>
        </div>
    </div>
@endsection