<?php

// 販売者画面

// ユーザ系
Route::prefix('user')->group(function () {
    // ユーザ情報
    Route::get('/', 'Seller\User\UserController@index');

    // ユーザ情報編集
    Route::get('edit', 'Seller\User\UserController@edit');
    Route::post('edit', 'Seller\User\UserController@postEdit');

    // パスワード変更
    Route::get('password', 'Seller\User\UserController@password');
    Route::post('password', 'Seller\User\UserController@postPassword');
});

// 商品系
Route::prefix('products')->group(function () {
    // 商品一覧
    Route::get('/', 'Seller\Products\ProductsController@index');

    // 商品詳細
    Route::get('detail/{product_id}', 'Seller\Products\ProductsController@detail');

    // 商品編集
    Route::get('edit/{product_id}', 'Seller\Products\ProductsController@edit');
    Route::post('edit/{product_id}', 'Seller\Products\ProductsController@postEdit');

    // 売上詳細
    Route::get('sales/{product_id}', 'Seller\Products\ProductsController@sales');
});

// 納品系
Route::prefix('delivery')->group(function () {
    Route::prefix('cardboard')->group(function () {
        // ダンボール申請
        Route::get('apply', 'Seller\Delivery\CardboardController@apply');
        Route::post('apply', 'Seller\Delivery\CardboardController@postApply');

        // ダンボール一覧
        Route::get('/', 'Seller\Delivery\CardboardController@index');
    });

    // 納品履歴
    Route::get('history', 'Seller\Delivery\HistoryController@index');
});