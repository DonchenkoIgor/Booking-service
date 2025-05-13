<?php

use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'booking'], function () {
    Route::get('/', [MainController::class, 'index'])->name('booking');
    Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('booking.services');
});

Route::get('/services/{masterId}', [\App\Http\Controllers\OrderController::class, 'select'])->name('booking.services.select');
Route::get('/services/{masterId}/{serviceId}', [\App\Http\Controllers\OrderController::class, 'showBookingForm'])->name('showBookingForm');
Route::post('/services/submit', [\App\Http\Controllers\OrderController::class, 'orderSubmit'])->name('booking.submit');


