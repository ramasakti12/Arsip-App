<?php

use App\Http\Controllers\ArsipController;
use Illuminate\Support\Facades\Route;

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


Route::get('/arsip', [ArsipController::class, 'arsip'])->name('arsip');
//arsip
Route::view('arsip-tambah', 'arsip.tambah')->name('arsip-tambah');
Route::post('arsip-tambah', [ArsipController::class, 'tambah'])->name('arsip-tambah');
Route::get('arsip-hapus/{id}', [ArsipController::class, 'hapus'])->name('arsip-hapus');
Route::get('arsip-detail/{id}', [ArsipController::class, 'detail'])->name('arsip-detail');
Route::get('arsip-download/{id}', [ArsipController::class, 'download'])->name('arsip-download');
Route::get('arsip-edit/{id}', [ArsipController::class, 'edit'])->name('arsip-edit');
Route::post('arsip-update/{id}',[ArsipController::class, 'update'])->name('arsip-update');
//about
Route::get('about', [ArsipController::class, 'about'])->name('about');
//dashboard
Route::get('/', [ArsipController::class, 'dashboard'])->name('dashboard');

