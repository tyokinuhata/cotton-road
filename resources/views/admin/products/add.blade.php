@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品登録</h1>
        <div class="mb-2">
            <form method="POST" action="{{ url('/admin/products/add') }}" class="d-inline">
                @csrf
                <div>
                    <div class="row mb-2">
                        <label for="name" class="col-md-2">商品名</label>
                        <input type="text" id="name" name="name" class="form-control col-md-7 d-inline" maxlength="30" required autofocus>
                    </div>
                    @if ($errors->has('name'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="description" class="col-md-2">説明</label>
                        <textarea id="description" name="description" class="form-control col-md-7 d-inline" rows="10" maxlength="500" required></textarea>
                    </div>
                    @if ($errors->has('description'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="price" class="col-md-2">価格</label>
                        <input type="number" id="price" name="price" class="form-control col-md-7 d-inline" value="0" min="0" max="9999999" required>
                    </div>
                    @if ($errors->has('price'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('price') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="stock_number" class="col-md-2">在庫数</label>
                        <input type="number" id="stock_number" name="stock_number" class="form-control col-md-7 d-inline" value="1" min="1" max="1000" required>
                    </div>
                    @if ($errors->has('stock_number'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('stock_number') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="safety_stock_number" class="col-md-2">安全在庫数</label>
                        <input type="number" id="safety_stock_number" name="safety_stock_number" class="form-control col-md-7 d-inline" value="1" min="1" max="1000" required>
                    </div>
                    @if ($errors->has('safety_stock_number'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('safety_stock_number') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="category" class="col-md-2">カテゴリ</label>
                        <select id="category" name="category" class="form-control col-md-7 d-inline" required>
                            @foreach ($productCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('category'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('category') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="status" class="col-md-2">ステータス</label>
                        <select id="status" name="status" class="form-control col-md-7 d-inline" required>
                            @foreach ($productStatuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('status'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="img" class="col-md-2">画像</label>
                        <input type="file" id="img" name="img" class="col-md-4 d-inline">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">登録</button>
            </form>
            <p>{{ session('success_msg') }}</p>
        </div>
        <div>
            <a href="{{ url('/admin/products') }}">< 戻る</a>
        </div>
    </div>
@endsection