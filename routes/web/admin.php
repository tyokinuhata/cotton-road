<?php

// 管理者画面

// ユーザ系
Route::prefix('user')->group(function () {
    // ユーザ情報
    Route::get('/', 'Admin\UserController@index');

    // ユーザ情報変更
    Route::get('change', 'Admin\UserController@change');

    // ユーザ操作
    Route::get('operate', 'Admin\USerController@operate');
});

// 商品系
Route::prefix('products')->group(function () {
    // 商品一覧
    Route::get('/', 'Admin\ProductsController@index');

    // 商品登録
    Route::get('add', 'Admin\ProductsController@add');

    // 商品編集
    Route::get('edit', 'Admin\ProductsController@edit');

    // 商品詳細
    Route::get('detail', 'Admin\ProductsController@detail');
});

// 発注・入庫系
Route::prefix('orders')->group(function () {
    // 未発注一覧
    Route::get('yet', 'Admin\OrdersController@yet');

    // 入庫待ち一覧
    Route::get('wait', 'Admin\OrdersController@wait');

    // 入庫済み一覧
    Route::get('done', 'Admin\OrdersController@done');
});

// 出庫系
Route::prefix('shipments')->group(function () {
    // 未出庫一覧
    Route::get('yet', 'Admin\ShipmentsController@yet');

    // 出庫済一覧
    Route::get('done', 'Admin\ShipmentsController@done');
});

// 売上一覧
Route::get('sales', 'Admin\SalesController@index');