<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');

Route::get('/about',[AboutController::class,'index'])->name('about.index');