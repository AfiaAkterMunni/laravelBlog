<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        $categories = Category::all();
        return view('pages.home', ['categories' => $categories]);
    }
}

