<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscribeRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function store(StoreSubscribeRequest $request)
    {
        Subscriber::create([
            'email' => $request->input('email'),
        ]);
        return redirect(url()->previous().'#mc-form')->with('subscribe', 'Thanks for subscribing!');
    }
}
