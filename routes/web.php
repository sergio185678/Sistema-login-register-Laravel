<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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
Route::get('/register', [RegisterController::class,'show']);
Route::post('/register', [RegisterController::class,'register']);
Route::get('/login', [LoginController::class,'show']);
Route::post('/login', [LoginController::class,'login']);

Route::get('/home', [HomeController::class,'show']);
Route::get('/logout', [LogoutController::class,'logout']);