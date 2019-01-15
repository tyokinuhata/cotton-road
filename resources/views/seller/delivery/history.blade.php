@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">納品履歴</h1>

        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a href="#product" class="nav-link active" data-toggle="tab">商品</a>
            </li>
            <li class="nav-item">
                <a href="#additionStock" class="nav-link" data-toggle="tab">追加在庫</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="product" class="tab-pane active">
                @if (count($productHistories) === 0)
                    <p>商品の履歴はありません。</p>
                @else
                    <table class="table table-striped">
                        <tr>
                            <th>商品名</th>
                            <th>価格</th>
                            <th>数量</th>
                            <th>ステータス</th>
                            <th>販売者</th>
                            <th>納品日</th>
                        </tr>
                        @foreach ($productHistories as $history)
                            <tr>
                                <td>
                                    <a href="{{ url("/seller/products/detail/{$history->product_id}") }}" target="_blank">{{ $history->product->name }}</a>
                                </td>
                                <td>¥{{ $history->product->price }}</td>
                                <td>{{ $history->product->stock_number }}個</td>
                                <td>{{ $history->productStatus->name }}</td>
                                <td>{{ $history->user->username }}({{ $history->user->user_id }})</td>
                                <td>{{ $history->created_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $productHistories->links() }}
                @endif
            </div>

            <div id="additionStock" class="tab-pane">
                @if (count($productHistories) === 0)
                    <p>追加在庫の履歴はありません。</p>
                @else
                    <table class="table table-striped">
                        <tr>
                            <th>商品名</th>
                            <th>価格</th>
                            <th>数量</th>
                            <th>ステータス</th>
                            <th>販売者</th>
                            <th>納品日</th>
                        </tr>
                        @foreach ($stockAdditionHistories as $history)
                            <tr>
                                <td>
                                    <a href="{{ url("/seller/products/detail/{$history->product_id}") }}" target="_blank">{{ $history->product->name }}</a>
                                </td>
                                <td>¥{{ $history->product->price }}</td>
                                <td>{{ $history->product->stock_additions }}個</td>
                                <td>{{ $history->stockAdditionStatus->name }}</td>
                                <td>{{ $history->user->username }}({{ $history->user->user_id }})</td>
                                <td>{{ $history->created_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $stockAdditionHistories->links() }}
                @endif
            </div>
        </div>
    </div>
@endsection