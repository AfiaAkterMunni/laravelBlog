<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dasboard\StoreCategoryRequest;
use App\Http\Requests\Dasboard\UpdateCategoryRequest;
use App\Http\Requests\Dasboard\UpdateUserRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('dashboard.pages.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('dashboard.pages.categories.create');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('dashboard.pages.categories.edit', [
            'category' => $category
        ]);
    }

    public function store(StoreCategoryRequest $request)
    {
        // dd($request);
        Category::create([
            'name' => $request->input('category_name')
        ]);
        return redirect(route('category.create'))->with('category', 'Category created successfully!');
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        // dd($id);
        $category = Category::find($id);
        Category::where('id', $category->id)->update([
            'name' => $request->input('title')
        ]);
        return redirect(url()->previous())->with('categoryUpdate', 'Category Updated successfully!');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        Category::where('id', $category->id)->delete();
        return redirect(url()->previous())->with('categoryDelete', 'Category Deleted successfully!');
    }

}
