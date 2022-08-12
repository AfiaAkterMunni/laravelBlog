<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.categories.index');
    }

    public function create()
    {
        return view('dashboard.pages.categories.create');
    }
    public function edit()
    {
        return view('dashboard.pages.categories.edit');
    }
}
