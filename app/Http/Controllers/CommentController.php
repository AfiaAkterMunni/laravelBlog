<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        $user_id = Auth::id();
        if($user_id == null)
        {
            return redirect()->route('login');
        }
        Comment::create([
            'comment' => $request->input('message'),
            'user_id' => $user_id,
            'blog_id' => $request->input('blog_id')
        ]);
        return redirect(url()->previous().'#allComments');
    }
}
