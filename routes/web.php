<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/form_pasien', function () {
    return view('form pasien');
});

Route::get('/', function () {
    return view('landing page');
});

