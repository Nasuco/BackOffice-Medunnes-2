<?php

use App\Http\Controllers\backend\PasienController;
use App\Http\Controllers\backend\DokterController;
use App\Models\Pasien;
use App\Http\Controllers\backend\UsermanagementController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'is-ban'], function(){
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::get('list_pasien',[PasienController::class,'index'])->name('pasien.index');
    Route::post('userBan',[PasienController::class,'ban'])->name('pasien.ban');
    Route::get('userUserRevoke/{id}',[PasienController::class,'revoke'])->name('pasien.revokepasien');
});

Route::get('view_admin', [App\Http\Controllers\backend\AdminController::class,'index'])->name('admin.index');


Route::get('list_dokter', [DokterController::class,'index'])->name('dokter.index');
Route::get('create_dokter', [DokterController::class,'store'])->name('dokter.store');
// Route::post('store_dokter', [DokterController::class,'store'])->name('dokter.store');
Route::delete('/hapus_dokter/{id}', [DokterController::class,'destroy'])->name('dokter.destroy');

// Route::get('view_admin', [UsermanagementController::class, 'index'])->name('admin.index');

Route::get('list_konsultasi', [App\Http\Controllers\backend\KonsultasiController::class,'index'])->name('konsultasi.index');
// hapus konsultasi
// Route::get('/hapus_konsultasi/{id}', [App\Http\Controllers\backend\KonsultasiController::class,'destroy'])->name('konsultasi.destroy');
Route::delete('/hapus_konsultasi/{id}', [App\Http\Controllers\backend\KonsultasiController::class,'destroy'])->name('konsultasi.destroy');

// spesialis
Route::get('list_spesialis', [App\Http\Controllers\backend\SpesialisController::class,'index'])->name('spesialis.index');
Route::get('create_spesialis', [App\Http\Controllers\backend\SpesialisController::class,'store'])->name('spesialis.store');

Route::get('activity', [App\Http\Controllers\backend\ActivitylogController::class,'index'])->name('activity.index');

Route::get('user_list', [App\Http\Controllers\backend\UsermanagementController::class,'UserList'])->name('user.index');
Route::get('/edit_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserEdit']);
Route::post('/update_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserUpdate']);
Route::get('/delete_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserDelete']);

Route::get('/ban-user', function () {
    $pasien = Pasien::findOrFail(2);
    $pasien->ban();
});