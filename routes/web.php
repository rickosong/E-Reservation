<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\LandingController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\allRuanganController;
use App\Http\Controllers\User\pesananMemberController;
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

// Auth
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'regisMember']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'storeLogin']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// User
Route::get('/', [LandingController::class, 'index'])->name('landing')->middleware('guest');;
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage')->middleware('auth');
Route::get('/allruangan', [allRuanganController::class, 'index'])->name('allRuangan')->middleware('auth');
Route::get('/pesananmember', [pesananMemberController::class, 'index'])->name('pesananMember')->middleware('auth');
Route::get('/profile', [profileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/editprofile', [profileController::class, 'viewEditProfile'])->name('editprofile')->middleware('auth');
Route::get('/aboutpage', [HomeController::class, 'aboutPage'])->name('aboutpage')->middleware('auth');