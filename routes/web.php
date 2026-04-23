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
Route::get('/auth', function () {
    return view('auth');
});
Route::get('/reset-password', function () {
    return view('reset-password');
});
Route::get('/guide', function () {
    return view('guide');
});