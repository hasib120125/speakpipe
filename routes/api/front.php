<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\PageController;

// Auth
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/user', [AuthController::class, 'user']);
Route::post('/reset/password', [AuthController::class, 'resetPassword']);
Route::post('/new-password', [AuthController::class, 'newPassword']);

// Static Page
Route::get('/page/{slug}', [HomeController::class, 'staticPage']);

// Page
Route::get('/get/static-page/{id}/{slug}', [PageController::class, 'getPageContent']);

Route::middleware('auth:customer')->group(function () {
    // Auth
    Route::any('/user', [AuthController::class, 'user']);

    // Image
    Route::post('/temp/image', [HomeController::class, 'tempImageUpload']);
});
