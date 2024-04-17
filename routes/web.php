<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;


Route::get('/home', [PostController::class, 'home'])->name('home');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
