<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccountSetting;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Common\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\CustomSectionController;
use App\Http\Controllers\Admin\SocialSettingController;
use App\Http\Controllers\Admin\SystemSettingController;


// Auth
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth.lfm')->prefix('binary-lfm')->group(function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware('auth:admin')->group(function () {

    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);

    // Settings
    Route::get('/setting/get-logo', [SettingController::class, 'getLogo']);
    Route::get('/setting/get/{type}', [SettingController::class, 'getSettings']);
    Route::post('/update-logos', [SettingController::class, 'storeOrUpdateSiteLogs']);
    Route::post('/logo-delete', [SettingController::class, 'deleteLogo']);

    // Customers
    Route::apiResource('customers', CustomerController::class);

    // Social credential
    Route::apiResource('social-settings', SocialSettingController::class);

    // Social Media
    Route::apiResource('social-media', SocialMediaController::class);

    // system Settings
    Route::apiResource('/system-settings', SystemSettingController::class);

    // Pages
    Route::apiResource('pages', PageController::class);
    Route::get('/page-list', [PageController::class, 'getPageList']);

    // custom section
    Route::apiResource('custom-section', CustomSectionController::class);

    Route::get('current-user', [AccountSetting::class, 'user']);
    Route::patch('update-user/{admin}', [AccountSetting::class, 'updateUser']);
    Route::get('admin-login-history', [AccountSetting::class, 'loginHistory']);
    Route::get('admin-users', [AccountSetting::class, 'adminUsers']);
    Route::post('admin-user/status-update/{admin}', [AccountSetting::class, 'adminStatusChange']);
    Route::post('admin-user', [AccountSetting::class, 'storeUser']);
    Route::delete('admin-user/{admin}', [AccountSetting::class, 'deleteUser']);
});
