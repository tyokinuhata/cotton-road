@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品詳細</h1>
        <div class="mb-2">
            <div class="mb-2">
                <img src="{{ asset($product->img) }}" alt="">
            </div>
            <table class="table table-striped">
                <tr>
                    <th>商品ID</th>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <th>商品名</th>
                    <td>{{ $product->name }}</td>
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
                    <th>在庫数</th>
                    <td>{{ $product->stock_number }}個</td>
                </tr>
                <tr>
                    <th>カテゴリ</th>
                    <td>{{ $product->productCategory->name }}</td>
                </tr>
                <tr>
                    <th>登録ユーザ</th>
                    <td>{{ $product->user->username }}({{ $product->user->user_id }})</td>
                </tr>
                <tr>
                    <th>登録日</th>
                    <td>{{ $product->created_at }}</td>
                </tr>
            </table>
            <form method="POST" action="{{ url('/customer/products/addCart') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <select name="amount" class="form-control col-md-1 d-inline" required autofocus>
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <button type="submit" class="btn btn-primary ml-1">カートに追加</button>
                @if ($errors->has('amount'))
                    <div class="text-danger">{{ $errors->first('amount') }}</div>
                @endif
                <p>{{ session('success_msg') }}</p>
            </form>
        </div>
        <div>
            <a href="{{ url('/customer/products') }}">< 戻る</a>
        </div>
    </div>
@endsection