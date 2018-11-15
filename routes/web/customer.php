<?php

// 購入者画面
// 商品一覧
Route::get('products', function () {
    return view('customer.products.index');
});

// 商品詳細
Route::get('products/detail', function () {
    return view('customer.products.detail');
});

// 購入履歴
Route::get('products/history', function () {
    return view('customer.products.history');
});

// ユーザ情報
Route::get('user', function () {
    return view('customer.user.index');
});

// ユーザ情報変更
Route::get('user/change', function () {
    return view('customer.user.change');
});

// カート
Route::get('cart', function () {
    return view('customer.cart.index');
});