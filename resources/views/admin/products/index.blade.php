@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品一覧</h1>
        <div>
            <form method="GET" action="{{ url('/admin/products') }}">
                <input type="text" placeholder="商品ID or 商品名" name="keywords" class="form-control col-md-8 d-inline mb-4 mr-2" autofocus required>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
            @isset ($products)
                @foreach($products as $product)
                    <div class="mb-2">
                        <img src="{{ asset('/storage/images/products/product.png') }}" alt="">
                    </div>
                    <div class="mb-4">
                        <table class="table">
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
                                <td>{{ $product->price }}</td>
                            </tr>
                            {{--<tr>--}}
                            {{--<th>カテゴリー</th>--}}
                            {{--<td>{{ $products->category }}</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                            {{--<th>在庫数</th>--}}
                            {{--<td>100個</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                            {{--<th>登録者</th>--}}
                            {{--<td>ミジュマル</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <th>登録日</th>
                                <td>{{ $product->created_at }}</td>
                            </tr>
                        </table>
                        <div>
                            <a href="{{ url('/admin/products/edit') }}" class="btn btn-success">編集</a>
                            <button type="submit" class="btn btn-danger">削除</button>
                            <a href="{{ url('/admin/products/detail') }}" class="btn btn-primary">売上詳細</a>
                        </div>
                    </div>
                @endforeach
            @endisset
            <div>
                <a href="{{ url('/admin/products/add') }}" class="btn btn-primary">商品登録</a>
            </div>
        </div>
    </div>
@endsection