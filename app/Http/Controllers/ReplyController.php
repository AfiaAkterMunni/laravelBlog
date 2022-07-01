<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReplyRequest;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function store(StoreReplyRequest $request){
        $user_id = Auth::id();
        if($user_id == null){
            return redirect()->route('login');
        }
        Reply::create([
            'reply' => $request->input('reply'),
            'comment_id' => $request->input('comment_id'),
            'user_id' => $user_id
        ]);
        return redirect(url()->previous().'#comment-'.$request->input('comment_id'));
    }
}
