@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">入庫待ち一覧</h1>
        <table class="table table-striped">
            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th>発注先企業名</th>
                <th>単価</th>
                <th>個数</th>
                <th>金額</th>
                <th>発注日</th>
                <th>&nbsp;</th>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>100</td>
                <td>10</td>
                <td>1000</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>100</td>
                <td>10</td>
                <td>1000</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>

            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>100</td>
                <td>10</td>
                <td>1000</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
        </table>
    </div>
@endsection