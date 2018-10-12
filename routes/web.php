<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 管理者画面
Router::prefix('admin')->group(function () {
    // 未発注一覧
    Route::get('orders/yet', function () {
        return view('');
    });

    // 発注済一覧
    Route::get('orders/done', function () {
        return view('');
    });

    // 未出庫一覧
    Route::get('shipments/yet', function () {
        return view('');
    });

    // 出庫済一覧
    Route::get('shipments/done', function () {
        return view('');
    });

    // ユーザ情報
    Route::get('user', function () {
        return view('');
    });

    // 売上一覧
    Route::get('sales', function () {
        return view('');
    });

    // 売上詳細情報
    Route::get('sales/detail', function () {
        return view('');
    });
});

// 販売者画面
Route::prefix('seller')->group(function () {
    // 未納品一覧
    Route::get('delivery/yet', function () {
        return view('');
    });

    // 納品済一覧
    Route::get('delivery/done', function () {
        return view('');
    });

    // ユーザ情報
    Route::get('user', function () {
        return view('');
    });

    // 売上一覧
    Route::get('sales', function () {
        return view('');
    });

    // 売上詳細
    Route::get('sales/detail', function () {
        return view('');
    });
});

// 購入者画面
Route::prefix('buyer')->group(function () {
    // 商品一覧
    Route::get('product', function () {
        return view('');
    });

    // 商品詳細
    Route::get('product/detail', function () {
        return view('');
    });

    // 購入履歴
    Route::get('product/history', function () {
        return view('');
    });

    // ユーザ情報
    Route::get('user', function () {
        return view('');
    });
});