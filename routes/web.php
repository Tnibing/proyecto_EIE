<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web');
});

Route::get('/mascotas', function () {
    return view('web');
});

Route::get('/cuidadores', function () {
    return view('web');
});

Route::get('/patrocinios', function () {
    return view('web');
});

Route::get('/aboutUs', function () {
    return view('web');
});
