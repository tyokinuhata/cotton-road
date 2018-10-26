<?php

// 購入者画面
// 商品一覧
Route::get('product', function () {
    return view('buyer.product.index');
});

// 商品詳細
Route::get('product/detail', function () {
    return view('buyer.product.detail');
});

// 購入履歴
Route::get('product/history', function () {
    return view('buyer.product.history');
});

// ユーザ情報
Route::get('user', function () {
    return view('buyer.user.index');
});

// ユーザ情報変更
Route::get('user/change', function () {
    return view('buyer.user.change');
});

// カート
Route::get('cart', function () {
    return view('buyer.cart.index');
});