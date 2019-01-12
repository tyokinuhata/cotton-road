@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">在庫・安全在庫追加申請</h1>
        <form method="POST" action="{{ url('/seller/delivery/products/stock') }}">
            @csrf
            <div class="row">
                <select name="type" class="form-control col-md-1" required autofocus>
                    <option value="1">在庫</option>
                    <option value="2">安全在庫</option>
                </select>
                <input type="number" name="product_id" class="form-control col-md-1 ml-1" placeholder="商品ID" min="1" required>
                <input type="number" name="stock_number" class="form-control col-md-1 ml-1" value="1" min="1" max="1000" required>
                <button type="submit" class="btn btn-primary ml-1">申請</button>
            </div>
        </form>
        <div class="mt-2">
            <p>{{ session('success_msg') }}</p>
            @if ($errors->has('product_id'))
                <p class="text-danger">{{ $errors->first('product_id') }}</p>
            @endif
            @if ($errors->has('stock_number'))
                <p class="text-danger">{{ $errors->first('stock_number') }}</p>
            @endif
        </div>
    </div>
@endsection