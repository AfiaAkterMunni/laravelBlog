<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dasboard\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(3);
        return view('dashboard.pages.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('dashboard.pages.categories.create');
    }

    public function edit()
    {
        return view('dashboard.pages.categories.edit');
    }

    public function store(StoreCategoryRequest $request)
    {
        // dd($request);
        Category::create([
            'name' => $request->input('category_name')
        ]);
        return redirect(route('category.create'))->with('category', 'Category created successfully!');
    }
}
