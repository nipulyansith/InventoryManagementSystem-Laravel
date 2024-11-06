<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventoryController;

Route::view('/', 'posts.index')->name('home');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/register','auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::view('/login','auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);

