@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">未発注一覧</h1>
        <table class="table table-striped">
            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th>発注先企業名</th>
                <th>価格</th>
                <th>不足数</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>¥100</td>
                <td>10</td>
                <td>
                    <form method="POST" action="">
                        <input type="number" class="form-control d-inline col-md-2" name="number" value="1">
                        <button type="submit" class="btn btn-danger">発注</button>
                    </form>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>¥100</td>
                <td>10</td>
                <td>
                    <form method="POST" action="">
                        <input type="number" class="form-control d-inline col-md-2" name="number" value="1">
                        <button type="submit" class="btn btn-danger">発注</button>
                    </form>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>¥100</td>
                <td>10</td>
                <td>
                    <form method="POST" action="">
                        <input type="number" class="form-control d-inline col-md-2" name="number" value="1">
                        <button type="submit" class="btn btn-danger">発注</button>
                    </form>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
        </table>
    </div>
@endsection