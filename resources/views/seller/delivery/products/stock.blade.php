@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">在庫・安全在庫追加申請</h1>
        @if (count($products) === 0)
            <p>申請できる商品がありません。</p>
        @else
            <table class="table table-striped">
                <tr>
                    <td>商品名</td>
                    <td>価格</td>
                    <td>在庫数</td>
                    <td>安全在庫数</td>
                    <td>&nbsp;</td>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <a href="{{ url("/seller/products/detail/{$product->id}") }}" target="_blank">{{ $product->name }}</a>
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock_number }}</td>
                        <td>{{ $product->safety_stock_number }}</td>
                        <td>
                            <form method="POST" action="{{ url('/seller/delivery/products/stock') }}">
                                @csrf
                                <select name="type" class="form-control col-md-3 d-inline" required autofocus>
                                    <option value="1">在庫</option>
                                    <option value="2">安全在庫</option>
                                </select>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="number" name="stock_number" class="form-control col-md-2 d-inline" value="1" min="1" max="1000" required>
                                <p class=" mb-0 mt-2 d-inline">個</p>
                                <button type="submit" class="btn btn-primary ml-1">申請</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection