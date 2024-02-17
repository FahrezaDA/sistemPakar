<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\AturanController;
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

Route::get('/gejala', [GejalaController::class, 'index']);


Route::get('/penyakit', [PenyakitController::class, 'index']);

Route::get('/konsultasi', function () {
    return view('konsultasi');
});

//Aturan
Route::get('/aturan', [AturanController::class, 'index']);
