<?php

// 管理者画面

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

    // ユーザ操作系
    Route::prefix('operate')->group(function () {
        // ユーザ操作
        Route::get('/', 'OperateController@index');

        // ユーザ操作(購入履歴)
        Route::get('history/{user_id}', 'OperateController@history');

        // ユーザ操作(ユーザ情報編集)
        Route::get('edit/{user_id}', 'OperateController@edit')->middleware([ 'guards.employees' ]);
        Route::post('edit/{user_id}', 'OperateController@postEdit')->middleware([ 'guards.employees' ]);

        // ユーザ操作(パスワード変更)
        Route::get('password/{user_id}', 'OperateController@password')->middleware([ 'guards.employees' ]);
        Route::post('password/{user_id}', 'OperateController@postPassword')->middleware([ 'guards.employees' ]);

        // ユーザ操作(凍結)
        Route::post('lock', 'OperateController@lock')->middleware([ 'guards.employees' ]);

        // ユーザ操作(凍結解除)
        Route::post('unlock', 'OperateController@unlock')->middleware([ 'guards.employees' ]);

        // ユーザ操作(ユーザ追加)
        Route::get('add', 'OperateController@add')->middleware([ 'guards.employees' ]);
        Route::post('add', 'OperateController@postAdd')->middleware([ 'guards.employees' ]);
    });
});

// 商品系
Route::prefix('products')->namespace('Products')->group(function () {
    // 商品一覧
    Route::get('/', 'ProductsController@index');

    // 商品詳細
    Route::get('detail/{product_id}', 'ProductsController@detail');

    // 商品編集
    Route::get('edit/{product_id}', 'ProductsController@edit')->middleware([ 'guards.employees' ]);
    Route::post('edit/{product_id}', 'ProductsController@postEdit')->middleware([ 'guards.employees' ]);
    Route::post('edit/{product_id}/delete', 'ProductsController@delete')->middleware([ 'guards.employees' ]);

    // 売上詳細
    Route::get('sales/{product_id}', 'ProductsController@sales');

    // 強制ステータス変更
    Route::get('status/{product_id}', 'ProductsController@status')->middleware([ 'guards.employees' ]);
    Route::post('status/{product_id}', 'ProductsController@postStatus')->middleware([ 'guards.employees' ]);

    // 商品登録
    Route::get('add', 'ProductsController@add')->middleware([ 'guards.employees' ]);
    Route::post('add', 'ProductsController@postAdd')->middleware([ 'guards.employees' ]);
});

// 発注・入庫系
Route::prefix('orders')->namespace('Orders')->group(function () {
    // ダンボール一覧
    Route::get('cardboard', 'CardboardController@index');
    Route::post('cardboard/send', 'CardboardController@send');

    // 新規商品一覧
    Route::prefix('newly')->namespace('Newly')->group(function () {
        Route::get('/', 'IndexController@index');
        Route::post('approve', 'IndexController@approve');
        Route::post('noApprove', 'IndexController@noApprove');
        Route::post('addContainer', 'IndexController@addContainer');
        Route::post('sendBack', 'IndexController@sendBack');
        Route::post('waitDisposal', 'IndexController@waitDisposal');
        Route::post('disposal', 'IndexController@disposal');
    });
});