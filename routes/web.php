<?php

use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cari']);

Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('add.mhs');

Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);

Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update'])->name('update.mhs');

Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']);

Route::get('/mahasiswa/exportpdf', [MahasiswaController::class, 'exportpdf']);

Route::get('/pegawai',[PegawaiController::class, 'index']);

Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

