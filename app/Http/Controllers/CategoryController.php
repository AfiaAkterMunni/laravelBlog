<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //display/show blade
    public function show($id){

        $category = Category::find($id);

        $blogs = $category->blogs()->paginate(6);

        return view('pages.category', [
            'category' => $category->name,
            'blogs' => $blogs
        ]);
    }
}
