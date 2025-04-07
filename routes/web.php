<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/guru', function () {
    return view('pages.guru');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/fasilitas', function () {
    return view('pages.fasilitas');
});

Route::get('/404', function () {
    return view('pages.404');
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});

