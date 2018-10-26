<?php

// 管理者画面
// 商品一覧
Route::get('product', function () {
    return view('admin.product.index');
});

// 商品の追加
Route::get('product/add', function () {
    return view('admin.product.add');
});

// 商品の編集
Route::get('product/edit', function () {
    return view('admin.product.edit');
});

// 商品詳細
Route::get('product/detail', function () {
    return view('admin.product.detail');
});

// 未発注一覧
Route::get('orders/yet', function () {
    return view('admin.orders.yet');
});

// 発注済一覧
Route::get('orders/done', function () {
    return view('admin.orders.done');
});

// 未出庫一覧
Route::get('shipments/yet', function () {
    return view('admin.shipments.yet');
});

// 出庫済一覧
Route::get('shipments/done', function () {
    return view('admin.shipments.done');
});

// 売上一覧
Route::get('sales', function () {
    return view('admin.sales.index');
});

// ユーザ情報
Route::get('user', function () {
    return view('admin.user.index');
});

// ユーザ情報変更
Route::get('user/change', function () {
    return view('admin.user.change');
});

// 強制退会
Route::get('warning', function () {
    return view('admin.warning.index');
});

