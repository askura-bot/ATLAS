<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('content/home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('content/about', ['title' => 'About']);
});

Route::get('/home/gereja', function () {
    return view('content/detail', ['title' => 'Gereja']);
});
