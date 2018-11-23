<?php

// 管理者画面

// ユーザ系
Route::prefix('user')->group(function () {
    // ユーザ情報
    Route::get('/', 'Admin\UserController@index');

    // ユーザ情報編集
    Route::get('edit', 'Admin\UserController@edit');
    Route::post('edit', 'Admin\UserController@postEdit');

    // パスワード変更
    Route::get('password', 'Admin\UserController@password');
    Route::post('password', 'Admin\UserController@postPassword');

    // ユーザ操作
    Route::get('operate', 'Admin\UserController@operate');

    // ユーザ操作(購入履歴)
    Route::get('operate/history/{user_id}', 'Admin\UserController@operateHistory');

    // ユーザ操作(ユーザ情報編集)
    Route::get('operate/edit/{user_id}', 'Admin\UserController@operateEdit');
    Route::post('operate/edit/{user_id}', 'Admin\UserController@postOperateEdit');

    // ユーザ操作(パスワード変更)
    Route::get('operate/password/{user_id}', 'Admin\UserController@operatePassword');
    Route::post('operate/password/{user_id}', 'Admin\UserController@postOperatePassword');

    // ユーザ操作(凍結)
    Route::post('operate/lock', 'Admin\UserController@lock');

    // ユーザ操作(凍結解除)
    Route::post('operate/unlock', 'Admin\UserController@unlock');
});

// 商品系
Route::prefix('products')->group(function () {
    // 商品一覧
    Route::get('/', 'Admin\ProductsController@index');

    // 商品登録
    Route::get('add', 'Admin\ProductsController@add');

    // 商品編集
    Route::get('edit', 'Admin\ProductsController@edit');

    // 売上詳細
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

// 納品系
Route::prefix('delivery')->group(function () {
    // 未出庫一覧
    Route::get('yet', 'Admin\DeliveryController@yet');

    // 出庫済一覧
    Route::get('done', 'Admin\DeliveryController@done');
});