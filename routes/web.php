<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Kategori
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index']);
Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create']);
Route::post('/kategori', [App\Http\Controllers\KategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit']);
Route::patch('/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update']);
Route::delete('/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroy']);

//Barang
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index']);
Route::get('/barang/create', [App\Http\Controllers\BarangController::class, 'create']);
Route::post('/barang', [App\Http\Controllers\BarangController::class, 'store']);
Route::get('/barang/{id}/edit', [App\Http\Controllers\BarangController::class, 'edit']);
Route::patch('/barang/{id}', [App\Http\Controllers\BarangController::class, 'update']);
Route::delete('/barang/{id}', [App\Http\Controllers\BarangController::class, 'destroy']);

//Pembeli
Route::get('/pembeli', [App\Http\Controllers\PembeliController::class, 'index']);
Route::get('/pembeli/create', [App\Http\Controllers\PembeliController::class, 'create']);
Route::post('/pembeli', [App\Http\Controllers\PembeliController::class, 'store']);
Route::get('/pembeli/{id}/edit', [App\Http\Controllers\PembeliController::class, 'edit']);
Route::patch('/pembeli/{id}', [App\Http\Controllers\PembeliController::class, 'update']);
Route::delete('/pembeli/{id}', [App\Http\Controllers\PembeliController::class, 'destroy']);