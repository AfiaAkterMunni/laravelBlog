<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        // $blogs = Blog::all();
        // $blogs = Blog::orderBy('id', 'DESC')->get();
        $blogs = Blog::latest()->get();
        $categories = Category::all();
        $sliders = Blog::latest()->limit(3)->get();
        return view('pages.home', [
            'categories' => $categories,
            'blogs' => $blogs,
            'sliders' => $sliders

        ]);
    }
}

