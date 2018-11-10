<?php

// 購入者画面
// 商品一覧
Route::get('product', function () {
    return view('customer.product.index');
});

// 商品詳細
Route::get('product/detail', function () {
    return view('customer.product.detail');
});

// 購入履歴
Route::get('product/history', function () {
    return view('customer.product.history');
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