<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(SearchRequest $request)
    {
        // dd($request->search);
        $blogs = Blog::where('title', 'LIKE', "%$request->search%")->paginate(5);
        return view('pages.search', [
            'blogs' => $blogs
        ]);
    }
}
