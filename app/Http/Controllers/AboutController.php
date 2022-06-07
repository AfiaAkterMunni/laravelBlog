<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show(){
        $categories = Category::all();
        return view('pages.about', ['categories' => $categories]);
    }
}
