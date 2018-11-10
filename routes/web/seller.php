<?php

// 販売者画面
// 未納品一覧
Route::get('delivery/yet', function () {
    return view('seller.delivery.yet');
});

// 納品済一覧
Route::get('delivery/done', function () {
    return view('seller.delivery.done');
});

// 商品一覧
Route::get('product', function () {
    return view('seller.product.index');
});

// 商品詳細
Route::get('product/detail', function () {
    return view('seller.product.detail');
});

// ユーザ情報
Route::get('user', function () {
    return view('seller.user.index');
});

// ユーザ情報変更
Route::get('user/change', function () {
    return view('seller.user.change');
});