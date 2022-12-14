<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\AktualController;
use App\Http\Controllers\ForecastingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/forecasting', [ForecastingController::class, 'index']);
Route::resource('/obat', ObatController::class);
Route::resource('obat.aktual', AktualController::class);

