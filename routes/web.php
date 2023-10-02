<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});


Route::get('/gejala', function () {
    return view('gejala');
});

Route::get('/aturan', function () {
    return view('aturan');
});

Route::get('/penyakit', function () {
    return view('penyakit');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});
