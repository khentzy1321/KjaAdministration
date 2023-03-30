<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|rgba(36, 35, 35, 0.925)
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::resource('profile', 'App\Http\Controllers\ProfileController');
Route::resource('bio', 'App\Http\Controllers\BioProfile');
Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('chats', 'App\Http\Controllers\ChatController');
