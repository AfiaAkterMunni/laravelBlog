<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubscribeController;
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



Route::get('/', [HomeController::class, 'show'])->name('homePage');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog');

Route::get('/about', [AboutController::class, 'show'])->name('about');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category');

//store data
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
