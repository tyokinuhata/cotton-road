<?php

// 販売者画面

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
});

// 商品系
Route::prefix('products')->namespace('Products')->group(function () {
    // 商品一覧
    Route::get('/', 'ProductsController@index');

    // 商品詳細
    Route::get('detail/{product_id}', 'ProductsController@detail');

    // 商品編集
    Route::get('edit/{product_id}', 'ProductsController@edit');
    Route::post('edit/{product_id}', 'ProductsController@postEdit');

    // 売上詳細
    Route::get('sales/{product_id}', 'ProductsController@sales');
});

// 納品系
Route::prefix('delivery')->namespace('Delivery')->group(function () {
    Route::prefix('cardboard')->group(function () {
        // ダンボール申請
        Route::get('apply', 'CardboardController@apply');
        Route::post('apply', 'CardboardController@postApply');

        // ダンボール一覧
        Route::get('/', 'CardboardController@index');
    });

    Route::prefix('products')->group(function () {
        // 商品発送
        Route::get('sell', 'ProductsController@sell');

        // 返送要求
        Route::get('back', 'ProductsController@back');

        // 廃棄要求
        Route::get('disposal', 'ProductsController@disposal');
    });

    // 納品履歴
    Route::get('history', 'HistoryController@index');
});