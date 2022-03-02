<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\allRuanganController;
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

Route::get('/homepage/posts', function(){
    return view('reservation.post');
})->name('post');

Route::get('/homepage/post/pesan', function(){
    return view('reservation.formpemesanan');
})->name('formpemesanan');

Route::get('/homepage/post/invoice', function(){
    return view('reservation.buktipemesanan');
})->name('invoice');

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
Route::get('/homepage/allruangan', [allRuanganController::class, 'index'])->name('allRuangan')->middleware('auth');
Route::get('/homepage/pesananmember', [pesananMemberController::class, 'index'])->name('pesananMember')->middleware('auth');
Route::get('/homepage/profile', [profileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/homepage/profile/edit/{user:id}', [profileController::class, 'editProfile'])->name('editprofile')->middleware('auth');
Route::put('/homepage/profile/edit/{user:id}', [profileController::class, 'updateProfile'])->name('updateprofile')->middleware('auth');
Route::get('/homepage/aboutpage', [HomeController::class, 'aboutPage'])->name('aboutpage')->middleware('auth');

// admin
Route::get('/adminpage', [HomeController::class, 'testViewAdmin'])->name('adminview')->middleware('auth', 'isAdmin');