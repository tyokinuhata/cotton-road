@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品詳細</h1>
        <div class="mb-2">
            <table class="table table-striped">
                <tr>
                    <th>商品ID</th>
                    <td>{{ $product->product_id }}</td>
                </tr>
                <tr>
                    <th>商品名</th>
                    <td>{{ $product->product_name }}</td>
                </tr>
                <tr>
                    <th>説明</th>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <th>価格</th>
                    <td>¥{{ $product->price }}</td>
                </tr>
                <tr>
                    <th>カテゴリー</th>
                    <td>{{ $product->category }}</td>
                </tr>
                <tr>
                    <th>在庫数</th>
                    <td>100個</td>
                </tr>
                <tr>
                    <th>登録者</th>
                    <td>ミジュマル</td>
                </tr>
                <tr>
                    <th>登録日</th>
                    <td>{{ $product->created_at }}</td>
                </tr>
            </table>
        </div>
        <div>
            <a href="{{ url('/admin/products') }}">< 戻る</a>
        </div>
    </div>
@endsection