<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/verification', function () {
    return view('verification');
});
