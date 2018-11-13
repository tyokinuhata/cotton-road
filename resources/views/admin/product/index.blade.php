@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="h1">商品一覧</h1>
        <form method="post" action="">
            <label for=""></label>
            <input type="text" placeholder="商品ID" class="form-control col-md-8 d-inline mb-4" autofocus>
            <button type="submit" class="btn btn-primary">検索</button>
        </form>

        <table class="table table-striped mb-4">
            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th>価格</th>
                <th>登録者</th>
                <th>登録日</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>100</td>
                <td>ミジュマル</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-success">編集</a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">削除</a>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>100</td>
                <td>ミジュマル</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-success">編集</a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">削除</a>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>100</td>
                <td>ミジュマル</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-success">編集</a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">削除</a>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

        </table>

        <div class="text-right">
            <a href="" class="btn btn-primary">商品を追加する</a>
        </div>
    </div>
@endsection