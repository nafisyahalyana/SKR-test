<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\formBookingController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    return view('dashboard');
})->middleware('auth');

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy']);
    Route::get('/pengguna', [UserController::class, 'pengguna'])->middleware(['admin']);
    Route::get('/dashboard', [UserController::class, 'index']);
});

// Route::get('/peminjaman', function(){
//     return view('peminjaman');
// })->middleware('auth');
Route::get('/peminjaman', [AddController::class, 'store'])->name('store')->middleware('auth');
Route::get('/peminjaman-edit/{id}', [AddController::class, 'edit'])->middleware('auth');
Route::post('/peminjaman/{id}', [AddController::class, 'update'])->middleware('auth');




// Route::get('/validasi', [ValidasiController::class, 'validasi'])->middleware(['auth', 'admin']);

Route::get('/validasi-delete/{id}', [ValidasiController::class, 'destroy'])->middleware('auth');
Route::get('/validasi', [ValidasiController::class, 'validasi'])->name('validasi')->middleware('auth');
Route::post('/validasi/{booking}', [ValidasiController::class, 'approve'])->name('approve')->middleware('auth');
Route::post('/validasi/{booking}/reject', [ValidasiController::class, 'reject'])->name('reject')->middleware('auth');

Route::get('/validasi-edit/{id}', [ValidasiController::class, 'edit'])->middleware('auth');
Route::post('/validasi/{id}', [ValidasiController::class, 'update'])->middleware('auth');

Route::get('/booking', [formBookingController::class, 'formRuangan'])->name('formRuangan')->middleware('auth');
// Route::get('/get-available-rooms', [FormBookingController::class, 'getAvailableRooms'])->name('getAvailableRooms');
Route::post('/booking', [formBookingController::class, 'booking'])->name('booking')->middleware('auth', 'check.room.status'); //'check.room.status'

Route::middleware('auth')->group(function(){
    Route::get('/ruangan', [RuanganController::class, 'index']);
    Route::get('/ruangan-add', [RuanganController::class, 'create']);
    Route::post('/ruangan', [RuanganController::class, 'store']);
    
    Route::get('/ruangan-edit/{id}', [RuanganController::class, 'edit']);
    Route::post('/ruangan/{id}', [RuanganController::class, 'update']);
    Route::get('/ruangan-delete/{id}', [RuanganController::class, 'destroy']);
});

Route::get('/jadwal', [JadwalController::class, 'jadwal'])->middleware('auth');






require __DIR__.'/auth.php';
