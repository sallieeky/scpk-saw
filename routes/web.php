<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginPost']);
Route::get('/daftar', [AuthController::class, 'daftar']);
Route::post('/daftar', [AuthController::class, 'daftarPost']);

Route::get('/tessaw', [DashboardController::class, 'sawCount']);

Route::middleware(['auth'])->group(function () {
    Route::middleware(['not_mahasiswa'])->group(function () {
        Route::get('/insert-data-profile', [DashboardController::class, 'insertDataProfile']);
        Route::post('/insert-data-profile', [DashboardController::class, 'insertDataProfilePost']);
    });

    Route::middleware(["mahasiswa"])->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/profile', [DashboardController::class, 'profile']);
    });
    
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::get("/migrate", function() {
    Artisan::call("migrate:fresh --seed");
});


