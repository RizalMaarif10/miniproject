<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
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

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('login', function () {
    return view('login');
})->name('login');


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::post('home', [HomeController::class, 'store'])->name('posts.store');

Route::get('profile', [AuthController::class, 'edit'])->name('profile.edit');
Route::post('profile', [AuthController::class, 'update'])->name('profile.update');


Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');
