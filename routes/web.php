<?php

use App\Http\Controllers\Site\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/about-us', [AppController::class, 'about'])->name('about');
Route::get('/product/{slug}', [AppController::class, 'show'])->name('product.show');
