@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">カート</h1>
        @if (count($carts) === 0)
            <p>カートに商品は入っていません。</p>
        @else
            <table class="table table-striped">
                <tr>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>数量</th>
                    <th>小計</th>
                    <th>追加日</th>
                    <th>&nbsp;</th>
                </tr>
                @foreach ($carts as $cart)
                    <tr>
                        <td>
                            <a href="{{ url("/customer/products/detail/{$cart->product_id}") }}" target="_blank">{{ $cart->product->name }}</a>
                        </td>
                        <td>¥{{ $cart->product->price }}</td>
                        <td>{{ $cart->amount }}個</td>
                        <td>¥{{ $cart->product->price * $cart->amount }}</td>
                        <td>{{ $cart->created_at }}</td>
                        <td>
                            <form method="POST" action="{{ url('/customer/products/cart/delete') }}">
                                @csrf
                                <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                                <button type="submit" class="btn btn-danger">カートから削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>合計</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>¥{{ $carts->total }}</td>
                    <td>&nbsp;</td>
                    <td>
                        <form method="POST" action="{{ url('/customer/products/cart/buy') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">購入</button>
                        </form>
                    </td>
                </tr>
            </table>
        @endif

        <p>{{ session('success_msg') }}</p>
        <p class="text-danger">{{ session('error_msg') }}</p>
    </div>
@endsection