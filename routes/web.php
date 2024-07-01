<?php

use App\Controllers\HomeController;
use App\Facades\Route;

Route::get('/', HomeController::class, 'index');
Route::get('/contacts', HomeController::class, 'contacts');
Route::post('/contacts/create', 'App\Controllers\ContactController', 'create');

Route::dispatch();