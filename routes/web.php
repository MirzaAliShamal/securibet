<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/stripe/init', [HomeController::class, 'stripeInit'])->name('stripe.init');

Route::middleware('auth')->group(function () {
    Route::get('/moneybet', [HomeController::class, 'moneybet'])->name('moneybet');
});
