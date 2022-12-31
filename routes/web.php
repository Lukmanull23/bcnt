<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BaseController::class, 'home'])->name('home');
Route::get('/chart', [BaseController::class, 'chart'])->name('chart')->middleware('auth');
Route::get('/history', [BaseController::class, 'history'])->name('history')->middleware('auth');
Route::get('/training', [BaseController::class, 'training'])->name('training')->middleware('auth');
Route::get('/payment', [BaseController::class, 'payment'])->name('payment')->middleware('auth');
Route::get('/treatment', [BaseController::class, 'treatment'])->name('treatment')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

