<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MoneyBetController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BookmarkerController;
use App\Http\Controllers\Admin\BettingToolController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth', 'admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('/general-update', [DashboardController::class, 'generalUpdate'])->name('general.update');
    Route::post('/pass-update', [DashboardController::class, 'passUpdate'])->name('pass.update');
    Route::post('/setting', [DashboardController::class, 'setting'])->name('setting');
    Route::get('/plans', [DashboardController::class, 'plan'])->name('plan');

    Route::prefix('moneybets')->name('moneybet.')->controller(MoneyBetController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/fetch', 'fetch')->name('fetch');
        Route::get('/add', 'add')->name('add');
        Route::post('/save', 'save')->name('save');
        Route::get('/edit/{moneybet}', 'edit')->name('edit');
        Route::put('/update/{moneybet}', 'update')->name('update');
        Route::get('/delete/{moneybet}', 'delete')->name('delete');
    });

    Route::prefix('betting-tools')->name('betting.tool.')->controller(BettingToolController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/fetch', 'fetch')->name('fetch');
        Route::get('/add', 'add')->name('add');
        Route::post('/save', 'save')->name('save');
        Route::get('/edit/{betting}', 'edit')->name('edit');
        Route::put('/update/{betting}', 'update')->name('update');
        Route::get('/delete/{betting}', 'delete')->name('delete');
    });

    Route::prefix('bookmarkers')->name('bookmarker.')->controller(BookmarkerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/fetch', 'fetch')->name('fetch');
        Route::get('/add', 'add')->name('add');
        Route::post('/save', 'save')->name('save');
        Route::get('/edit/{bookmarker}', 'edit')->name('edit');
        Route::put('/update/{bookmarker}', 'update')->name('update');
        Route::get('/delete/{bookmarker}', 'delete')->name('delete');
    });
    
    Route::prefix('users')->name('user.')->controller(UsersController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/fetch', 'fetch')->name('fetch');
        Route::get('/delete/{moneybet}', 'delete')->name('delete');
    });
});
