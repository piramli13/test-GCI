<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/toko', [App\Http\Controllers\TokoController::class, 'index'])->Middleware('auth')->name('home');
Route::get('/invoice', [App\Http\Controllers\TokoController::class, 'invoice1'])->Middleware('auth')->name('invoice');
Route::get('/claim-voucer/{id}/{kupon}', [App\Http\Controllers\TokoController::class, 'claim'])->Middleware('auth');
Route::get('/bayar/{id}', [App\Http\Controllers\TokoController::class, 'bayar'])->Middleware('auth');
Route::post('/checkout/{id}', [App\Http\Controllers\TokoController::class, 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('toko');
