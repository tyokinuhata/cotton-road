@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1">商品追加</h1>

        <form method="post" action="">
            <div class="row mb-3">
                <label for="" class="col-md-1">商品名:</label>
                <input type="text" class="form-control col-md-7 d-inline">
            </div>
            <div class="row mb-3">
                <label for="" class="col-md-1">価格:</label>
                <input type="number" class="form-control col-md-7 d-inline">
            </div>
            <div class="row mb-3">
                <label for="" class="col-md-1">説明</label>
                <textarea class="form-control col-md-7 d-inline" rows="10"></textarea>
            </div>
            <div class="row">
                <label for="" class="col-md-1">画像</label>
                <input type="file" class="col-md-7 d-inline">
            </div>
            <button type="submit" class="btn btn-primary">追加</button>
        </form>
    </div>
@endsection