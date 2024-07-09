<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiAltController;
use App\Http\Controllers\SubkriteriaController;
use App\Http\Controllers\NormalisasiController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::controller(KriteriaController::class)->prefix('kriteria')->group(function(){
    Route::get('', 'index')->name('kriteria');
    Route::get('tambah', 'create')->name('kriteria.create');
    Route::post('tambah', 'store')->name('kriteria.create.store');
    Route::get('edit/{kode_kriteria}', 'edit')->name('kriteria.edit');
    Route::post('edit/{kode_kriteria}', 'update')->name('kriteria.create.update');
    Route::get('detail/{kode_kriteria}', 'show')->name('kriteria.detail');
    Route::get('hapus/{kode_kriteria}', 'destroy')->name('kriteria.destroy');
});

route::controller(AlternatifController::class)->prefix('alternatif')->group(function(){
    Route::get('', 'index')->name('alternatif');
    Route::get('tambah', 'create')->name('alternatif.create');
    Route::post('tambah', 'store')->name('alternatif.create.store');
    Route::get('edit/{kode_alternatif}', 'edit')->name('alternatif.edit');
    Route::post('edit/{kode_alternatif}', 'update')->name('alternatif.create.update');
    Route::get('detail/{kode_alternatif}', 'show')->name('alternatif.detail');
    Route::get('hapus/{kode_alternatif}', 'destroy')->name('alternatif.destroy');
});

route::controller(NilaiAltController::class)->prefix('nilaialternatif')->group(function(){
    Route::get('', 'index')->name('nilaialternatif');
    Route::get('tambah', 'create')->name('nilaialternatif.create');
    Route::post('tambah', 'store')->name('nilaialternatif.create.store');
    Route::get('edit/{nilai_alternatif}', 'edit')->name('nilaialternatif.edit');
    Route::post('edit/{nilai_alternatif}', 'update')->name('nilaialternatif.create.update');
    Route::get('detail/{nilai_alternatif}', 'show')->name('nilaialternatif.detail');
    Route::get('hapus/{nilai_alternatif}', 'destroy')->name('nilaialternatif.destroy');
});

route::controller(SubkriteriaController::class)->prefix('subkriteria')->group(function(){
    Route::get('', 'index')->name('subkriteria');
    Route::get('tambah', 'create')->name('subkriteria.create');
    Route::post('tambah', 'store')->name('subkriteria.create.store');
    Route::get('edit/{kode_subkriteria}', 'edit')->name('subkriteria.edit');
    Route::post('edit/{kode_subkriteria}', 'update')->name('subkriteria.create.update');
    Route::get('detail/{kode_subkriteria}', 'show')->name('subkriteria.detail');
    Route::get('hapus/{kode_subkriteria}', 'destroy')->name('subkriteria.destroy');
});

Route::controller(NormalisasiController::class)->prefix('normalisasi')->group(function(){
    Route::get('normal','index')->name('normalisasi_nilai');
});