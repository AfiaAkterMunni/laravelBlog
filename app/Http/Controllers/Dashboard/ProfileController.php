<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dasboard\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $id = Auth::id();
        $user = User::find($id);
        // dd($user);
        return view('dashboard.pages.profile', ['user' => $user]);
    }
    public function update(UpdateUserRequest $request)
    {
        User::where('id', Auth::id())->update([
            'username' => $request->input('name'),
            'email' => $request->input('email'),
            // 'image' => $request->input('image'),
            'designation' => $request->input('des')

        ]);
        return redirect(route('profile'))->with('success', 'Your Info updated Successfully!');
    }
}
