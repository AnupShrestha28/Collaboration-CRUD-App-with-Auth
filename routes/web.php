<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('dashboard', [HomeController::class, 'dashboard']);


Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/signup', [HomeController::class, 'register'])->name('signup');

Route::post('/login', [AuthController::class, 'loginuser'])->name('loginuser');
Route::post('/signup', [AuthController::class, 'signupuser'])->name('registeruser');
