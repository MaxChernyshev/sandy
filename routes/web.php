<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [MainController::class, 'index'])->name('mainPage');
