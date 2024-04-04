<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\AturanController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\Auth\LoginController;
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




Auth::routes();
Route::middleware(['auth'])->group(function () {
//Aturan
Route::get('/aturan', [AturanController::class, 'index']);
Route::post('/tambah-aturan', [Atu21ranController::class, 'store'])->name('tambah-aturan');

//konsultasi
Route::get('diagnosa', [KonsultasiController::class, 'index']);
Route::post('diagnosa', [KonsultasiController::class, 'hitungKonsultasi']);
Route::get('diagnosa/{data_diagnosa}', [KonsultasiController::class, 'showdata']);
Route::get('logoutt', [LoginController::class, 'logout']);


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
