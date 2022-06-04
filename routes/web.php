<?php

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

Route::get('/', function () {
    return view('frontend.home.index');
});

Route::resource('pinjam', PinjamController::class);
Route::resource('periksa', PeriksaController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

require __DIR__ . '/auth.php';
