<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/kontak', function () {
    return view('kontak');
});
