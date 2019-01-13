<?php

// 購入者画面

// ユーザ系
Route::prefix('user')->namespace('User')->group(function () {
    // ユーザ情報
    Route::get('/', 'UserController@index');

    // ユーザ情報編集
    Route::get('edit', 'UserController@edit');
    Route::post('edit', 'UserController@postEdit');

    // パスワード変更
    Route::get('password', 'UserController@password');
    Route::post('password', 'UserController@postPassword');

    // チャージ
    Route::get('charge', 'ChargeController@index');
    Route::post('charge', 'ChargeController@charge');
});

// 商品系
Route::prefix('products')->namespace('Products')->group(function () {

    // 商品一覧
    Route::get('/', 'ProductsController@index');

    // 商品詳細
    Route::get('detail/{product_id}', 'ProductsController@detail');

    // 売上詳細
    Route::get('sales/{product_id}', 'ProductsController@sales');

    // カート
    Route::get('cart', 'CartController@cart');

    // 購入履歴
    Route::get('history', 'ProductsController@history');
});