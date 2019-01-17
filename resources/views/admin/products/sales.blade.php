@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">売上履歴</h1>
        @if (count($sales) === 0)
            <p>まだ売上はありません。</p>
        @else
            <div class="mb-2">
                <p>現在の売上: ¥</p>
                <table class="table table-striped">
                    <tr>
                        <td>商品名</td>
                        <td>単価</td>
                        <td>個数</td>
                        <td>合計</td>
                        <td>購入者</td>
                        <td>売上日</td>
                    </tr>
                    @foreach ($sales as $sale)
                        <tr>
                            <td>
                                <a href="{{ url("/admin/products/detail/{$sale->product->id}") }}" target="_blank">{{ $sale->product->name }}</a>
                            </td>
                            <td>{{ $sale->product->price }}</td>
                            <td>{{ $sale->amount }}</td>
                            <td>{{ $sale->product->price * $sale->amount }}</td>
                            <td>{{ $sale->user->username }}({{ $sale->user->user_id }})</td>
                            <td>{{ $sale->updated_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif
    </div>
@endsection