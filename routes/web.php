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

// 共通画面
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// 管理者画面
Route::prefix('admin')->group(function () {
    // 商品一覧
    Route::get('product', function () {
        return view('admin.product.index');
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
});

// 販売者画面
Route::prefix('seller')->group(function () {
    // 未納品一覧
    Route::get('delivery/yet', function () {
        return view('seller.delivery.yet');
    });

    // 納品済一覧
    Route::get('delivery/done', function () {
        return view('seller.delivery.done');
    });

    // 商品一覧
    Route::get('sales', function () {
        return view('seller.sales.index');
    });

    // 商品詳細
    Route::get('sales', function () {
        return view('seller.sales.detail');
    });

    // ユーザ情報
    Route::get('user', function () {
        return view('seller.user.index');
    });

    // ユーザ情報変更
    Route::get('user/change', function () {
        return view('seller.user.change');
    });
});

// 購入者画面
Route::prefix('buyer')->group(function () {
    // 商品一覧
    Route::get('product', function () {
        return view('buyer.product.index');
    });

    // 商品詳細
    Route::get('product/detail', function () {
        return view('buyer.product.detail');
    });

    // 購入履歴
    Route::get('product/history', function () {
        return view('buyer.product.history');
    });

    // ユーザ情報
    Route::get('user', function () {
        return view('buyer.user.index');
    });

    // ユーザ情報変更
    Route::get('user/change', function () {
        return view('buyer.user.change');
    });

    // カート
    Route::get('cart', function () {
        return view('buyer.cart.index');
    });
});