<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\PinjamController;
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
// frontend
Route::get('/', function () {
    return view('frontend.home.index');
});

// backoffice
Route::resource('pinjam', PinjamController::class);
Route::resource('periksa', PeriksaController::class);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('barang', BarangController::class);
});

require __DIR__ . '/auth.php';
