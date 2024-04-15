<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Front\ArticleController;


Route::get('/', [MainController::class, 'index'])->name('mainPage');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
