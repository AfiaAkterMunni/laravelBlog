<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        $blogs = Blog::all();
        $categories = Category::all();
        return view('pages.home', [
            'categories' => $categories,
            'blogs' => $blogs,

        ]);
    }
}

