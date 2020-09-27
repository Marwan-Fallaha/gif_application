<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('history', [HistoryController::class, 'index'])->name('history');

Route::post('setLoginType', [LoginController::class, 'setLoginType']);
Route::post('getSearchResults', [HomeController::class, 'getSearchResults']);
Route::post('setDarkMode', [HomeController::class, 'setDarkMode']);