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

Route::get('add-student', [HomeController::class, 'addStudent']);

Route::post('save-student', [HomeController::class, 'saveStudent']);

Route::get('edit-student/{id}', [HomeController::class, 'editStudent']);

Route::post('update-student', [HomeController::class, 'updateStudent']);



