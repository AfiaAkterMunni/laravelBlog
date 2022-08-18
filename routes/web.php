<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Dashboard\BlogController as DashboardBlogController;
use App\Http\Controllers\Dashboard\CategoryController as DashboardCategoryController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Auth;
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
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');
Route::post('/reply', [ReplyController::class, 'store'])->name('reply.store');

Route::prefix('dashboard')->middleware('auth')->group(function(){

    // route for showing the profile edit blade
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    // update profile functionality
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // change or update password
    Route::post('/profile/changePassword', [ProfileController::class, 'changePassword'])->name('profile.changePassword');

    // Category Functionality
    Route::get('/category', [DashboardCategoryController::class, 'index'])->name('category.index');

    Route::get('/category/create', [DashboardCategoryController::class, 'create'])->name('category.create');

    Route::get('/category/edit/{id}', [DashboardCategoryController::class, 'edit'])->name('category.edit');

    Route::post('/category/store', [DashboardCategoryController::class, 'store'])->name('category.store');

    Route::post('/category/update/{id}', [DashboardCategoryController::class, 'update'])->name('category.update');

    Route::post('/category/delete/{id}', [DashboardCategoryController::class, 'delete'])->name('category.delete');


    //-----------Blogs Functionality-------------//

    // showing all blogs
    Route::get('/blogs', [DashboardBlogController::class, 'index'])->name('blogs.index');

    // showing blog create form blade
    Route::get('/blogs/create', [DashboardBlogController::class, 'create'])->name('blogs.create');

    Route::post('/blogs/store', [DashboardBlogController::class, 'store'])->name('blogs.store');

    Route::get('/blogs/edit/{id}', [DashboardBlogController::class, 'edit'])->name('blogs.edit');

    Route::post('/blog/update/{id}', [DashboardBlogController::class, 'update'])->name('blog.update');

    Route::post('/blog/delete/{id}', [DashboardBlogController::class, 'delete'])->name('blog.delete');



});








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
