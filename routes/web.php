<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Dashboard\AllBlogsController;
use App\Http\Controllers\Dashboard\BlogController as DashboardBlogController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');
Route::post('/reply', [ReplyController::class, 'store'])->name('reply.store');

Route::middleware('auth')->group(function(){

    //route for dashboard
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

    //update profile
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    //change or update password
    Route::post('/profile/changePassword', [ProfileController::class, 'changePassword'])->name('profile.changePassword');

    Route::get('/allblogs', [AllBlogsController::class, 'show'])->name('allblogs');




});
Route::get('/singleBlog', [DashboardBlogController::class, 'show'])->name('singleBlog');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
