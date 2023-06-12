<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::get('/signin', [AuthController::class, 'signin'])->name('customer_signin');
Route::post('/signin/post', [AuthController::class, 'signinPost'])->name('customer_signin_post');
Route::get('/signup', [AuthController::class, 'signup'])->name('customer_signup');
Route::post('/signup/post', [AuthController::class, 'signupPost'])->name('customer_signup_post');
Route::get('/account/reset_password', [AuthController::class, 'resetPassword'])->name('customer_reset_password');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout_customer');


Route::middleware('auth:customer')->group(function () {
    Route::get('/help', [CustomerController::class, 'help'])->name('customer_help');
    Route::get('/messages', [CustomerController::class, 'messages'])->name('customer_messages');
    Route::get('/messages/library', [CustomerController::class, 'messageLibrary'])->name('customer_messages_library');
    Route::get('/messages/sent', [CustomerController::class, 'messageSent'])->name('customer_messages_sent');
    Route::get('/messages/bookmarks', [CustomerController::class, 'messageBookmarks'])->name('customer_messages_bookmarks');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('login_admin');
    Route::post('/login/post', [AdminAuthController::class, 'loginPost'])->name('login_admin_post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout_admin');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin_dashboard');
    });
});

Route::group(['prefix' => 'binary-lfm', 'middleware' => ['web', 'auth:admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});