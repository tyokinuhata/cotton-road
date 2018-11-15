<?php

// 共通画面
Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->type === 'admin') {
            return redirect('admin/product');
        }
        if (Auth::user()->type === 'seller') {
            return redirect('seller/product');
        }
        if (Auth::user()->type === 'customer') {
            return redirect('customer/product');
        }
    }
    return view('top');
});

Auth::routes();