<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('/blog', [BlogController::class, 'show'])->name('blog');

Route::get('/about', [AboutController::class, 'show'])->name('about');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::get('/category', [CategoryController::class, 'show'])->name('category');


