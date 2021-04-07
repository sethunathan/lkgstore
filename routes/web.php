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

Route::get('/', function () {
    return view('intro');
});

Route::get('/home.html', function () {
    return view('intro');
});

Route::get('/offline.html', function () {
    return view('offline');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/enterotp', [App\Http\Controllers\OtpController::class, 'enterotp']);
Route::post('/enterotp', [App\Http\Controllers\OtpController::class, 'submitotp']);
