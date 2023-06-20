<?php

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
Route::prefix('dev-audit')
        ->name('log-viewer::')->group(function() {
    Route::name('nocs.')->prefix('browser')->group(function () {
        Route::get('/', 'App\Http\Controllers\Audit\BrowserLogViewerController@index')->name('dashboard');    
        Route::prefix('logs')->name('logs.')->group(function() {
            Route::get('/', 'App\Http\Controllers\Audit\BrowserLogViewerController@listLogs')
                ->name('list'); // log-viewer::logs.list

            Route::delete('delete', 'App\Http\Controllers\Audit\BrowserLogViewerController@delete')
                ->name('delete'); // log-viewer::logs.delete

            Route::prefix('{date}')->group(function() {
                Route::get('/', 'App\Http\Controllers\Audit\BrowserLogViewerController@show')
                    ->name('show'); // log-viewer::logs.show

                Route::get('download', 'App\Http\Controllers\Audit\BrowserLogViewerController@download')
                    ->name('download'); // log-viewer::logs.download

                Route::get('{level}', 'App\Http\Controllers\Audit\BrowserLogViewerController@showByLevel')
                    ->name('filter'); // log-viewer::logs.filter

                Route::get('{level}/search', 'App\Http\Controllers\Audit\BrowserLogViewerController@search')
                    ->name('search'); // log-viewer::logs.search
            });
        });
    });
});

