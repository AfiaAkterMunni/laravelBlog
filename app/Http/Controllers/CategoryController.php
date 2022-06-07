<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //display/show blade
    public function show(){
        $categories = Category::all();
        return view('pages.category', ['categories' => $categories]);
    }
}
