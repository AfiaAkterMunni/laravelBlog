<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;


class HomeController extends Controller
{
    public function show(){
        // $pags = Blog::paginate(3);
        // $blogs = Blog::orderBy('id', 'DESC')->get();
        $blogs = Blog::latest()->paginate(6);
        $categories = Category::all();
        $sliders = Blog::latest('view_count')->limit(3)->get();
        return view('pages.home', [
            'categories' => $categories,
            'blogs' => $blogs,
            'sliders' => $sliders
        ]);
    }
}

