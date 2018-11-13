@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="h1">商品詳細</h1>
        <img src="http://placehold.it/300x300&text=product" alt="">
        <table class="table table-striped mt-2">
            <tr>
                <th>商品ID</th>
                <td>1</td>
            </tr>

            <tr>
                <th>商品名</th>
                <td>タウリン</td>
            </tr>

            <tr>
                <th>説明</th>
                <td>おいしいよ</td>
            </tr>

            <tr>
                <th>登録者</th>
                <td>ミジュマル</td>
            </tr>

            <tr>
                <th>登録日</th>
                <td>YYYY/MM/DD</td>
            </tr>

            <tr>
                <th>更新日</th>
                <td>YYYY/MM/DD</td>
            </tr>
        </table>
    </div>
@endsection