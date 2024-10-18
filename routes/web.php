<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;

Route::post('/register-patient', [PatientController::class, 'store'])->name('register_patient');
Route::get('/reka-medic', [PatientController::class, 'rekaMedic'])->name('reka_medic');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/', function () {
    return view('landing page');
});

Route::get('/formpasien', function () {
    return view('formpasien');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/rekamedik', function () {
    return view('reka medic');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::post('/form-pasien', [AdminController::class, 'store'])->name('form-pasien.store');