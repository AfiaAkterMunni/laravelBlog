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
        $sliders = Blog::latest('view_count')->limit(3)->get();
        return view('pages.home', [
            'blogs' => $blogs,
            'sliders' => $sliders
        ]);
    }
}

