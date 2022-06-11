<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($id){
        $categories = Category::all();

        $blog = Blog::find($id);

        return view('pages.blog', [
            'categories' => $categories,
            'blog' => $blog

        ]);
    }
}
