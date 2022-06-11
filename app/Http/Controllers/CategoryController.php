<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //display/show blade
    public function show($id){

        $categories = Category::all();

        $category = Category::find($id);

        $blogs = $category->blogs;

        // dd($blogs);

        return view('pages.category', [
            'categories' => $categories,
            'category' => $category->name,
            'blogs' => $blogs
        ]);
    }
}
