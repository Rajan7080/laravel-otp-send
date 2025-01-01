<?php

use App\Http\Controllers\OtpController;
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
})->name('welcome');

Route::get('otpvalid', function () {
    return view('otpvalid');
})->name('otpvalid');

Route::post('OtpSend', [OtpController::class, 'OtpSend'])->name('OtpSend');
Route::post('Otp', [OtpController::class, 'Otp'])->name('Otp');
