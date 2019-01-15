@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">購入履歴</h1>
        @if (count($histories) === 0)
            <p>購入履歴はありません。</p>
        @else
            <table class="table table-striped">
                <tr>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>数量</th>
                    <th>合計</th>
                    <th>購入日</th>
                </tr>
                @foreach ($histories as $history)
                    <tr>
                        <td>
                            <a href="{{ url("/customer/products/detail/{$history->product_id}") }}" target="_blank">{{ $history->product->name }}</a>
                        </td>
                        <td>¥{{ $history->product->price }}</td>
                        <td>{{ $history->amount }}個</td>
                        <td>¥{{ $history->product->price * $history->amount }}</td>
                        <td>{{ $history->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection