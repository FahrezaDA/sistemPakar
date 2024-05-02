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
})->name('/');






Route::get('/konsultasi', function () {
    return view('konsultasi');
});




Auth::routes();
Route::middleware(['auth'])->group(function () {

//Aturan
Route::get('aturan', [AturanController::class, 'index'])->name('aturan');
Route::post('add-aturan', [AturanController::class, 'store'])->name('add-aturan');
Route::get('delete-aturan/{id_aturan}',[AturanController::class,'destroy'])->name('delete-aturan');
Route::put('update-aturan/{id_aturan}',[AturanController::class,'update'])->name('update-aturan');

//Gejala
Route::get('gejala',[GejalaController::class,'index'])->name('gejala');
Route::post('add-gejala', [GejalaController::class, 'store'])->name("add-gejala");
Route::get('delete-produk/{id_gejala}', [App\Http\Controllers\GejalaController::class,'destroy'])->name('delete-gejala');
Route::put('update-gejala/{id_gejala}',[GejalaController::class,'update'])->name('update-gejala');




//konsultasi
Route::get('diagnosa', [KonsultasiController::class, 'index']);
Route::post('diagnosa', [KonsultasiController::class, 'hitungKonsultasi']);
Route::get('diagnosa/{data_diagnosa}', [KonsultasiController::class, 'showdata']);
Route::get('cetakHasil/{id_hasil}', [KonsultasiController::class, 'cetakHasil']);
Route::get('logoutt', [LoginController::class, 'logout']);


//Penyakit
Route::get('penyakit', [PenyakitController::class, 'index'])->name('penyakit');
Route::post('add-penyakit', [PenyakitController::class, 'store'])->name("add-penyakit");
Route::get('delete-penyakit/{id_penyakit}', [App\Http\Controllers\PenyakitController::class,'destroy'])->name('delete-penyakit');
Route::put('update-penyakit/{id_penyakit}',[PenyakitController::class,'update'])->name('update-penyakit');

});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
