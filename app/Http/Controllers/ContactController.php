<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        $categories = Category::all();
        return view('pages.contact', ['categories' => $categories]);
    }
}
