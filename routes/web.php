<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\EventController as DashboardEventController;
use App\Http\Controllers\Dashboard\UserController as DashboardUserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/languages/change', [HomeController::class, 'changeLanguage']);

Route::resource('events', EventController::class)->only(['index', 'show']);

Route::prefix('dashboard')->middleware(['admin'])->group(function () {
    Route::get('/', [HomeController::class, 'dashboard']);

    Route::resource('events', DashboardEventController::class);
    Route::resource('users', DashboardUserController::class);
    // Route::delete('/users/multiDelete', [DashboardUserController::class, 'multiDelete']);
});

Route::get('/redirect-after-login', [HomeController::class, 'redirectAfterLogin']);
