<?php

// 購入者画面

// ユーザ系
Route::prefix('user')->group(function () {
    // ユーザ情報
    Route::get('/', 'UserController@index');

    // ユーザ情報変更
    Route::get('edit', 'UserController@edit');

    // チャージ
    Route::get('charge', 'UserController@charge');
});

// 商品系
Route::prefix('products')->group(function () {
    // 商品一覧
    Route::get('/', 'ProductsController@index');

    // 商品詳細
    Route::get('detail', 'ProductsController@detail');

    // 購入履歴
    Route::get('history', 'ProductsController@history');

    // カート
    Route::get('cart', 'ProductsController@cart');
});