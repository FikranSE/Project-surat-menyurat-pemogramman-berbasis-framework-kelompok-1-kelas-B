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

Route::get('/', [\App\Http\Controllers\PageController::class, 'index']);
Route::get('/signin', [\App\Http\Controllers\PageController::class, 'signin']);
Route::get('/signup', [\App\Http\Controllers\PageController::class, 'signup']);
Route::get('/suratmasuk', [\App\Http\Controllers\PageController::class, 'suratmasuk']);
Route::get('/suratkeluar', [\App\Http\Controllers\PageController::class, 'suratkeluar']);