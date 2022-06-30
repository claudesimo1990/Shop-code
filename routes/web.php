<?php

use App\Http\Controllers\Site\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'home'])->name('home');
