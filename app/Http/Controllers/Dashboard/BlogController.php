<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //All Blogs show
    public function index()
    {
        return view('dashboard.pages.blogs.allblogs');
    }

    //showing create form
    public function create()
    {
        return view('dashboard.pages.blogs.blog');
    }

    //showing edit form
    public function edit()
    {
        return view('dashboard.pages.blogs.updateblog');
    }


}
