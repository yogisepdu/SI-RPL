<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
