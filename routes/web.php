<?php

use App\Http\Controllers\Back\CategoryLayananController;
use App\Http\Controllers\Back\KaryawanController;
// use App\Http\Controllers\Back\LayananController;
use App\Http\Controllers\Back\MetodeLayananController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OrderMasukController;
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

Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('LandingPage');
// });
Route::get('/order', function () {
    return view('belumDiambil');
});
Route::get('/daftarLayanan', function () {
    return view('layouts/daftarLayanan');
});
Route::resource('karyawan', KaryawanController::class);
Route::resource('metode_layanan', MetodeLayananController::class);
Route::resource('jenis_layanan', CategoryLayananController::class);
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/landingPage', [HomeController::class, 'index'])->name('landingPage');


// Register only the index route
Route::resource('daftarLayanan', LayananController::class)->only(['index']);
Route::resource('orderMasuk', OrderMasukController::class)->only(['index']);

Route::resource('layanan', LayananController::class);
// Route::middleware(['role:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index']);
// });

// Route::middleware(['role:user'])->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
// });

// Route::middleware(['role:member'])->group(function () {
//     Route::get('/member', [MemberController::class, 'index']);
// });

