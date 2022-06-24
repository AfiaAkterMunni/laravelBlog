<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show(){
        return view('pages.about');
    }
}
