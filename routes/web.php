<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use App\Http\Controllers\Dashboard\EventController as DashboardEventController;
use App\Http\Controllers\Dashboard\CommentController as DashboardCommentController;
use App\Http\Controllers\Dashboard\UserController as DashboardUserController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;

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


// Home
Route::get('/', HomeController::class);

// Route to change the website's language
Route::put('/languages/change', LanguageController::class);

// Profile
Route::get('/profile', [ProfileController::class, 'edit']);



// <---- EVENT ROUTES ---->
Route::resource('events', EventController::class)->only(['index', 'show']);

Route::prefix('comments')->middleware(['auth'])->group(function () {
    Route::post('/', [CommentController::class, 'store']);
});



// <--- DASHBOARD ROUTES --->
Route::prefix('dashboard')->middleware(['admin'])->group(function () {
    // Dashboard home
    Route::get('/', DashboardHomeController::class);

    // Dashboard Events
    Route::resource('events', DashboardEventController::class);

    // Dashboard Users
    Route::resource('users', DashboardUserController::class);

    // Dashboard Comments
    Route::resource('comments', DashboardCommentController::class);
});


// A special route to redirect user after signin in
Route::get('/redirect-after-login', RedirectController::class);


// Developer Routes
Route::view('/developer', 'pages.developer');
