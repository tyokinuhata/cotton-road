<?php

// 403 Forbidden
Route::get('403', function () {
    return view('errors.403');
});

// 404 Not Found
Route::get('404', function () {
    return view('errors.404');
});