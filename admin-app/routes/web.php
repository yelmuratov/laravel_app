<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index3', function () {
    return view('index3');
});

Route::get('/index2', function () {
    return view('index2');
});

///pages/widgets.html
Route::get('/widgets', function () {
    return view('widgets');
});

//<a href="/top-nav" class="nav-link">
Route::get('/top-nav', function () {
    return view('layout/top-nav');
});

Route::get('/top-nav-sidebar', function () {
    return view('layout/top-nav-sidebar');
});

Route::get('/boxed', function () {
    return view('layout/boxed');
});

Route::get('/fixed-sidebar', function () {
    return view('layout/fixed-sidebar');
});

Route::get('/fixed-sidebar-custom', function () {
    return view('layout/fixed-sidebar-custom');
});