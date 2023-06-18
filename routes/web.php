<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewbabsatuController;
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

Route::controller(AuthController::class)->group( function(){
    Route::get('register','register')->name('register');
    
    Route::post('register','registerSimpan')->name('register.simpan');

    Route::post('login','loginAksi')->name('login.aksi');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::controller(ViewbabsatuController::class)->prefix('viewbabsatu')->group(function(){
    Route::get('','index')->name('viewbabsatu');
    Route::get('tambah','tambah')->name('viewbabsatu.tambah');
    Route::post('tambah','simpan')->name('viewbabsatu.tambah.simpan');
    Route::get('edit/{id}','edit')->name('viewbabsatu.edit');
    Route::post('edit/{id}','update')->name('viewbabsatu.tambah.update');
    Route::get('hapus/{id}','hapus')->name('viewbabsatu.hapus');
});


