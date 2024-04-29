<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.login')->with('title','Login');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard')->with('title','Dashboard');
});
Route::get('/inbox', function () {
    return view('layouts.inbox')->with('title','Inbox');
});
Route::get('/users', function () {
    return view('layouts.users')->with('title','Users');
});
Route::get('/product', function () {
    return view('layouts.product')->with('title','Product');
});

