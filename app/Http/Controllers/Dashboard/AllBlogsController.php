<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllBlogsController extends Controller
{
    public function show()
    {
        return view('dashboard.pages.blogs.allblogs');
    }
}
