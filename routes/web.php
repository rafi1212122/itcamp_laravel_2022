<?php

use App\Http\Controllers\GiftController;
use App\Http\Controllers\ReservationController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/reservation', [ReservationController::class, 'index'])->middleware(['auth'])->name('reservation');

Route::post('/reservation', [ReservationController::class, 'store'])->middleware(['auth'])->name('reservation.store');

Route::delete('/reservation/{reservation}', [ReservationController::class, 'destroy'])->middleware(['auth'])->name('reservation.destroy');

Route::get('/give', [GiftController::class, 'index'])->middleware(['auth'])->name('give');

Route::post('/give', [GiftController::class, 'store'])->middleware(['auth'])->name('give.store');

require __DIR__.'/auth.php';
