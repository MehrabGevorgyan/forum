<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ThemeController;

Route::get('/', [MainController::class, 'main']);

// auth
Route::get('/registration', [RegisterController::class, 'show'])->name('register.show');
Route::post('/registration', [RegisterController::class, 'store'])->name('register.store');

// resource
Route::resource('themes', ThemeController::class);

Route::get('/category/{id}', [MainController::class, 'category'])->name('category.show');
