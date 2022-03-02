<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AkunMemberController;
use App\Http\Controllers\AkunPetugasController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\BuatRuanganController;
use App\Http\Controllers\BuatPetugasController;

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
Route::get('homeadmin', [AdminHomeController::class, 'index'])->name ('homeadmin');

Route::get('akunmember', [AkunMemberController::class, 'index'])->name ('akunmember');

Route::get('akunpetugas', [AkunPetugasController::class, 'index'])->name ('akunpetugas');

Route::get('pesanan', [PesananController::class, 'index'])->name ('pesanan');

Route::get('ruangan', [RuanganController::class, 'index'])->name ('ruangan');

Route::get('buatruangan', [BuatRuanganController::class, 'index'])->name ('buatruangan');
Route::post('buatruangan', [BuatRuanganController::class, 'store'])->name ('storeruangan');

Route::get('buatakunpetugas', [BuatPetugasController::class, 'index'])->name ('buatakunpetugas');
