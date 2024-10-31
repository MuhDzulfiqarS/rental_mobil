<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LayoutController;

// ADMIN
use App\Http\Controllers\Admin\DataUserController as AdminDataUserController;
use App\Http\Controllers\Admin\DataMobilController as AdminDataMobilController;
use App\Http\Controllers\Admin\DaftarPeminjamanMobilController as AdminDaftarPeminjamanMobilController;
use App\Http\Controllers\Admin\DaftarPengembalianMobilController as AdminDaftarPengembalianMobilController;

// USER
use App\Http\Controllers\User\PeminjamanMobilController as UserPeminjamanMobilController;
use App\Http\Controllers\User\DaftarSewaController as UserDaftarSewaController;
use App\Http\Controllers\User\PengembalianMobilController as UserPengembalianMobilController;
use App\Http\Controllers\User\DaftarPengembalianMobilController as UserDaftarPengembalianMobilController;

use App\Models\Data_mobil;

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
    $dataMobil = Data_mobil::all();
    return view('landingpage', compact('dataMobil'));
});

Route::get('home', [LayoutController::class, 'index'])->middleware(['auth', 'cekUserLogin:1']);
Route::get('home_user', [LayoutController::class, 'index'])->middleware(['auth', 'cekUserLogin:2']);

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout','logout');
});

Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'index')->name('register');
    Route::post('register/proses', 'proses');
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:1']],function(){

        Route::get('data_user', [AdminDataUserController::class,'index'])->name('data_user');
        Route::get('data_user/create', [AdminDataUserController::class,'create']);
        Route::post('data_user/store', [AdminDataUserController::class,'store']);
        Route::get('data_user/{id}/edit', [AdminDataUserController::class,'edit'])->name('editdata_user');
        Route::put('data_user/{id}', [AdminDataUserController::class,'update']);
        Route::delete('data_user/{id}', [AdminDataUserController::class,'destroy'])->name('data_user.destroy');

        Route::get('data_mobil', [AdminDataMobilController::class,'index'])->name('data_mobil');
        Route::get('data_mobil/create', [AdminDataMobilController::class,'create']);
        Route::post('data_mobil/store', [AdminDataMobilController::class,'store']);
        Route::get('data_mobil/{id}/edit', [AdminDataMobilController::class,'edit'])->name('editdata_mobil');
        Route::put('data_mobil/{id}', [AdminDataMobilController::class,'update']);
        Route::delete('data_mobil/{id}', [AdminDataMobilController::class,'destroy'])->name('data_mobil.destroy');

        Route::get('daftar_peminjaman_mobil_admin', [AdminDaftarPeminjamanMobilController::class,'index'])->name('daftar_peminjaman_mobil_admin');

        Route::get('daftar_pengembalian_mobil_admin', [AdminDaftarPengembalianMobilController::class,'index'])->name('daftar_pengembalian_mobil_admin');
        

    });

    Route::group(['middleware' => ['cekUserLogin:2']],function(){

        Route::get('peminjaman_mobil', [UserPeminjamanMobilController::class,'index'])->name('peminjaman_mobil');
        Route::get('peminjaman_mobil/create', [UserPeminjamanMobilController::class,'create']);
        Route::post('peminjaman_mobil/store', [UserPeminjamanMobilController::class, 'store'])->name('peminjaman_mobil.store');
        Route::get('peminjaman_mobil/{id}/edit', [UserPeminjamanMobilController::class,'edit'])->name('editpeminjaman_mobil');
        Route::put('peminjaman_mobil/{id}', [UserPeminjamanMobilController::class,'update']);
        Route::delete('peminjaman_mobil/{id}', [UserPeminjamanMobilController::class,'destroy'])->name('peminjaman_mobil.destroy');

        Route::get('daftar_sewa', [UserDaftarSewaController::class,'index'])->name('daftar_sewa');
        Route::delete('daftar_sewa/{id}', [UserDaftarSewaController::class,'destroy'])->name('daftar_sewa.destroy');

        Route::get('pengembalian_mobil', [UserPengembalianMobilController::class,'index'])->name('pengembalian_mobil');
        Route::post('pengembalian_mobil/store', [UserPengembalianMobilController::class, 'store'])->name('pengembalian_mobil.store');
        Route::post('pengembalian_mobil/check', [UserPengembalianMobilController::class, 'checkRentalDetails'])->name('pengembalian_mobil.check');

        Route::get('daftar_pengembalian_mobil', [UserDaftarPengembalianMobilController::class,'index'])->name('daftar_pengembalian_mobil');
        Route::delete('daftar_pengembalian_mobil/{id}', [UserDaftarPengembalianMobilController::class,'destroy'])->name('daftar_pengembalian_mobil.destroy');

    });
});
