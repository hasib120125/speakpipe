<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Front\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::get('/signin', [AuthController::class, 'signin'])->name('customer_signin');
Route::post('/signin/post', [AuthController::class, 'signinPost'])->name('customer_signin_post');
Route::get('/signup', [AuthController::class, 'signup'])->name('customer_signup');
Route::post('/signup/post', [AuthController::class, 'signupPost'])->name('customer_signup_post');
Route::get('/account/reset_password', [AuthController::class, 'resetPassword'])->name('customer_reset_password');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout_customer');

//Pages
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/plans', [HomeController::class, 'plans'])->name('plans');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/voice-recorder', [HomeController::class, 'voiceRecorder'])->name('voice_recorder');

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

        //Customers
        Route::get('/customers', [AdminCustomerController::class, 'index'])->name('admin_customer_list');

        //Banners
        Route::get('/section/one/banner', [BannerController::class, 'sectionOne'])->name('admin_section_one_banner');
        Route::post('/section/one/banner/save', [BannerController::class, 'sectionOneSave'])->name('admin_section_one_banner_save');
        Route::get('/section/two/banner', [BannerController::class, 'sectionTwo'])->name('admin_section_two_banner');
        Route::post('/section/two/banner/save', [BannerController::class, 'sectionTwoSave'])->name('admin_section_two_banner_save');
        Route::get('/section/three/banner', [BannerController::class, 'sectionThree'])->name('admin_section_three_banner');
        Route::post('/section/three/banner/save', [BannerController::class, 'sectionThreeSave'])->name('admin_section_three_banner_save');
        Route::get('/section/four/banner', [BannerController::class, 'sectionFour'])->name('admin_section_four_banner');
        Route::post('/section/four/banner/save', [BannerController::class, 'sectionFourSave'])->name('admin_section_four_banner_save');
    });
});

Route::group(['prefix' => 'binary-lfm', 'middleware' => ['web', 'auth:admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});