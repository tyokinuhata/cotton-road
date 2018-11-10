@extends('layouts.app')

@section('content')
    <div class="container">
        商品一覧

        <form method="get" action="" >
            <input type="text" size="31"  >
            <input type="submit"  value="検索">
        </form>


        <table>
            <tr>
                <td>XXXX</td>
                <td>YYYY/MM/DD</td>
                <td><input type="button" value="詳細"></td>
            </tr>
            <tr>
                <td>XXXX</td>
                <td>YYYY/MM/DD</td>
                <td><input type="button" value="詳細"></td>
            </tr>
            <tr>
                <td>XXXX</td>
                <td>YYYY/MM/DD</td>
                <td><input type="button" value="詳細"></td>
            </tr>
            <tr>
                <td>XXXX</td>
                <td>YYYY/MM/DD</td>
                <td><input type="button" value="詳細"></td>
            </tr>
            <tr>
                <td>XXXX</td>
                <td>YYYY/MM/DD</td>
                <td><input type="button" value="詳細"></td>
            </tr>
        </table>
    </div>
@endsection