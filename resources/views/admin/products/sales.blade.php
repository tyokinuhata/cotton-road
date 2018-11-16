@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">売上一覧</h1>
        <form method="post" action="">
            <label for=""></label>
            <input type="text" placeholder="商品ID" class="form-control col-md-8 d-inline mb-4" autofocus>
            <button type="submit" class="btn btn-primary">検索</button>
        </form>
        <table class="table table-striped">
            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th>単価</th>
                <th>売上高</th>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>100</td>
                <td>114514</td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>100</td>
                <td>114514</td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>100</td>
                <td>114514</td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

        </table>
    </div>
@endsection