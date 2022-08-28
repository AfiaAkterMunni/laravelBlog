<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($id)
    {
        $blog = Blog::find($id);
        $user = $blog->user_id;
        $userBlogs = Blog::where('user_id', $user)->where('id', '!=', $id)->latest()->limit(3)->get();
        // dd($userBlogs);
        // $blog->update([
        //     'view_count'=> $blog->view_count + 1
        // ]);
        $blog->view_count++;

        $blog->update();
        return view('pages.blog', [
            'blog' => $blog,
            'userBlogs' => $userBlogs
        ]);
    }
}
