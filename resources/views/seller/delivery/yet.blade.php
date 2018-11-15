@extends('layouts.base')

@section('content')
    <div class="container">
        未納品一覧
        <table>
            <tr>
                <td>商品名</td>
                <td>日付</td>
                <td><input type="button" value="納品"></td>
            </tr>
            <tr>
                <td>XXXX</td>
                <td>YYYY/MM/DD</td>
                <td><input type="button" value="納品"></td>
            </tr>
            <tr>
                <td>XXXX</td>
                <td>YYYY/MM/DD</td>
                <td><input type="button" onclick="location.href='リンク先url'"value="納品"></td>
            </tr>
            <tr>
                <td>XXXX</td>
                <td>YYYY/MM/DD</td>
                <td><input type="button" onclick="location.href='リンク先url'"value="納品"></td>
            </tr>
            <tr>
                <td>XXXX</td>
                <td>YYYY/MM/DD</td>
                <td><input type="button" onclick="location.href='リンク先url'"value="納品"></td>
            </tr>
        </table>
    </div>
@endsection