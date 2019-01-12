<?php

// 共通画面
Route::get('/', function () {
    return view('top');
});

Auth::routes();