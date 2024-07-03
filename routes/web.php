<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Facades\Route;

Route::get('/', HomeController::class, 'index');
Route::get('/register', AuthController::class, 'showRegister');
Route::post('/register', AuthController::class, 'register');

Route::dispatch();