<?php

use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\DevController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [BookController::class, 'index'])->name('book');
Route::post('/', [BookController::class, 'store'])->name('book.store');



Route::group(['prefix' => 'app'], function () {

    Route::get('/link', [DevController::class, 'storageLink']);
    Route::get('/unlink', [DevController::class, 'storageUnLink']);

    Route::get('/migrate', [DevController::class, 'migrateAll']);

    Route::get('/migrate-fresh', [DevController::class, 'migrateFresh']);

    Route::get('/seed', [DevController::class, 'migrateSeed']);

    Route::get('/cache', [DevController::class, 'cacheAll']);
    Route::get('/clear', [DevController::class, 'cleareAll']);

    Route::get('/app-up', [DevController::class, 'appUp']);
    Route::get('/app-down', [DevController::class, 'appDown']);

    Route::get('/site-map', [DevController::class, 'siteMap']);
});
