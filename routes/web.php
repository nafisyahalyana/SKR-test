<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\formBookingController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\JadwalController;

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
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/pengguna', [UserController::class, 'pengguna'])->middleware(['auth', 'admin']);
Route::get('/dashboard', [UserController::class, 'index'])->middleware('auth');
Route::get('/peminjaman', function(){
    return view('peminjaman');
})->middleware('auth');
Route::get('/validasi', [ValidasiController::class, 'validasi'])->middleware(['auth', 'admin']);
Route::get('/validasi-edit/{id}', [ValidasiController::class, 'edit'])->middleware('auth');
Route::post('/validasi/{id}', [ValidasiController::class, 'update'])->middleware('auth');
Route::get('/validasi-delete/{id}', [ValidasiController::class, 'destroy'])->middleware('auth');

Route::get('/booking', [formBookingController::class, 'formRuangan'])->middleware('auth');
Route::post('/booking', [formBookingController::class, 'booking'])->name('booking')->middleware('auth');

Route::get('/ruangan', [RuanganController::class, 'index'])->middleware('auth');
Route::get('/ruangan-add', [RuanganController::class, 'create'])->middleware('auth');
Route::post('/ruangan', [RuanganController::class, 'store'])->middleware('auth');

Route::get('/ruangan-edit/{id}', [RuanganController::class, 'edit'])->middleware('auth');
Route::post('/ruangan/{id}', [RuanganController::class, 'update'])->middleware('auth');
Route::get('/ruangan-delete/{id}', [RuanganController::class, 'destroy'])->middleware('auth');

Route::get('/jadwal', [JadwalController::class, 'jadwal'])->middleware('auth');
require __DIR__.'/auth.php';
