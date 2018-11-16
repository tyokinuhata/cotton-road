@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">未出庫一覧</h1>
        <table class="table table-striped">
            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th>納品先顧客</th>
                <th>注文日</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-danger">発注</a>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-danger">発注</a>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-danger">発注</a>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
        </table>
    </div>
@endsection