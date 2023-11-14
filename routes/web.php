<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/en', [LanguageController::class, 'en'])->name('en');
Route::get('/jp', [LanguageController::class, 'jp'])->name('jp');
