<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dasboard\StoreBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //All Blogs show
    public function index()
    {
        $blogs = Blog::paginate(3);
        return view('dashboard.pages.blogs.index', [
            'blogs' => $blogs
        ]);
    }

    //showing create form
    public function create()
    {
        $categories = Category::get();
        return view('dashboard.pages.blogs.create', [
            'categories' => $categories
        ]);
    }

    //showing edit form
    public function edit()
    {
        return view('dashboard.pages.blogs.edit');
    }

    public function store(StoreBlogRequest $request)
    {
        $user_id = Auth::id();
        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('editor1'),
            'user_id' => $user_id,
            'category_id' => $request->category
        ];
        if(isset($request->image))
        {
            $newImageName = rand().'.'.$request->image->getClientOriginalExtension();
            $request->image->move('uploads/blogs/', $newImageName);

            $data['image'] = $newImageName;
        }
        Blog::create($data);
        return redirect(route('blogs.create'))->with('createBlog', 'Your Blog Created Successfully!!!');
    }

}
