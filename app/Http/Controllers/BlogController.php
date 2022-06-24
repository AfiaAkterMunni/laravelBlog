<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($id){

        $blog = Blog::find($id);
        // $blog->update([
        //     'view_count'=> $blog->view_count + 1
        // ]);
        $blog->view_count++;

        $blog->update();
        return view('pages.blog', [
            'blog' => $blog
        ]);
    }
}
