<?php

// 販売者画面

// インフォメーション
Route::prefix('info')->namespace('Info')->group(function () {
    // 通知
    Route::get('notice', 'InfoController@notice');

    // 問い合わせ
    Route::get('inquiry', 'InfoController@inquiry');
});

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

    // 売上履歴
    Route::get('sales', 'SalesController@index');
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
        // 商品出品
        Route::get('sell', 'ProductsController@sell');
        Route::post('sell', 'ProductsController@postSell');

        // 在庫・安全在庫追加
        Route::get('stock', 'ProductsController@stock');
        Route::post('stock', 'ProductsController@postStock');

        // 返送・廃棄要求
        Route::get('request', 'ProductsController@request');
    });

    // 納品履歴
    Route::get('history', 'HistoryController@index');
});