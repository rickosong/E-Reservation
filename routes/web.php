<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AkunMemberController;
use App\Http\Controllers\AkunPetugasController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\pesananMemberController;
use App\Http\Controllers\Auth\forgotPasswordController;
use App\Http\Controllers\User\profileController;


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

// reservasi
Route::get('/homepage/ruangan/{ruangan:id}', [RuanganController::class, 'show'])->name('post')->middleware('auth');
Route::get('/homepage/pesan/{ruangan:id}', [PesananController::class, 'create'])->name('pesan')->middleware('auth');
Route::post('/homepage/pesan', [PesananController::class, 'store'])->name('pesanruangan')->middleware('auth');
Route::get('/homepage/pesanan/invoice', [PesananController::class, 'invoice'])->name('invoice')->middleware('auth');


// Auth
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'regisMember']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'storeLogin']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forgotpassword', [forgotPasswordController::class, 'index'])->name('search')->middleware('guest');
Route::post('/forgotpassword', [forgotPasswordController::class, 'editPassword'])->middleware('guest');
Route::put('/forgotpassword/change/{user:id}', [forgotPasswordController::class, 'updatePass'])->name('changepassword')->middleware('guest');


// User
Route::get('/', [LandingController::class, 'index'])->name('landing')->middleware('guest');;
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage')->middleware('auth');
Route::get('/homepage/allruangan', [RuanganController::class, 'indexHome'])->name('allRuangan')->middleware('auth');
Route::get('/homepage/pesananmember', [pesananMemberController::class, 'index'])->name('pesananMember')->middleware('auth');
Route::get('/homepage/profile', [profileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/homepage/profile/edit/{user:id}', [profileController::class, 'editProfile'])->name('editprofile')->middleware('auth');
Route::put('/homepage/profile/edit/{user:id}', [profileController::class, 'updateProfile'])->name('updateprofile')->middleware('auth');
Route::get('/homepage/aboutpage', [HomeController::class, 'aboutPage'])->name('aboutpage')->middleware('auth');

// Admin
// Route::get('/adminpage', [HomeController::class, 'testViewAdmin'])->name('adminview')
Route::get('/homeadmin', [AdminHomeController::class, 'index'])->name ('homeadmin')->middleware('auth', 'isAdmin');
// Admin-akunMember
Route::get('/akunmember', [AkunMemberController::class, 'index'])->name ('akunmember')->middleware('auth', 'isAdmin');
Route::get('/akunmember/edit/{profile:id}', [AkunMemberController::class, 'edit'])->name ('editakunmember')->middleware('auth', 'isAdmin');
Route::put('/akunmember/update/{user:id}', [AkunMemberController::class, 'update'])->name ('updateakunmember')->middleware('auth', 'isAdmin');
Route::delete('/akunmember/delete/{user:id}', [AkunMemberController::class, 'destroy'])->name ('hapusakunmember')->middleware('auth', 'isAdmin');
// Admin-akunMember End
// Admin-akunPetugasAdmin
Route::get('/akunpetugas', [AkunPetugasController::class, 'index'])->name ('akunpetugas')->middleware('auth', 'isAdmin');
Route::get('/akunpetugas/buatakunpetugas', [AkunPetugasController::class, 'add'])->name ('buatakunpetugas')->middleware('auth', 'isAdmin');
Route::post('/akunpetugas/buatakunpetugas', [AkunPetugasController::class, 'store'])->name ('storeakunpetugas')->middleware('auth', 'isAdmin');
Route::get('/akunpetugas/edit/{profile:id}', [AkunPetugasController::class, 'edit'])->name ('editakunpetugas')->middleware('auth', 'isAdmin');
Route::put('/akunpetugas/update/{user:id}', [AkunPetugasController::class, 'update'])->name ('updateakunpetugas')->middleware('auth', 'isAdmin');
Route::delete('/akunpetugas/delete/{user:id}', [AkunPetugasController::class, 'destroy'])->name ('hapusakunpetugas')->middleware('auth', 'isAdmin');
// Admin-akunPtugasAdmin End
// Admin-Ruangan
Route::get('/ruangan', [RuanganController::class, 'index'])->name ('ruangan')->middleware('auth', 'isAdmin');
Route::get('/ruangan/buaturuangan', [RuanganController::class, 'add'])->name ('buatruangan')->middleware('auth', 'isAdmin');
Route::post('/ruangan/buatruangan', [RuanganController::class, 'store'])->name ('storeruangan')->middleware('auth', 'isAdmin');
Route::delete('/ruangan/delete/{ruangan:id}', [RuanganController::class, 'destroy'])->name ('hapusruangan')->middleware('auth', 'isAdmin');
Route::get('/ruangan/edit/{ruangan:id}', [RuanganController::class, 'edit'])->name ('editruangan')->middleware('auth', 'isAdmin');
Route::put('/ruangan/update/{ruangan:id}', [RuanganController::class, 'update'])->name ('updateruangan')->middleware('auth', 'isAdmin');
// Admin-Ruangan
// Admin-Pesanan
Route::get('/pesanan', [PesananController::class, 'index'])->name ('pesanan')->middleware('auth', 'isAdmin');
Route::get('/pesanan/editpesanan/{penyewaan:id}', [PesananController::class, 'edit'])->name ('editpesanan')->middleware('auth', 'isAdmin');
Route::put('/pesanan/updatepesanan/{penyewaan:id}', [PesananController::class, 'update'])->name ('updatepesanan')->middleware('auth', 'isAdmin');
Route::delete('/pesanan/hapuspesanan/{penyewaan:id}', [PesananController::class, 'destroy'])->name ('hapuspesanan')->middleware('auth', 'isAdmin');
