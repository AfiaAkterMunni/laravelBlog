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
        // $user = Auth::user();
        return view('dashboard.pages.profile', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request)
    {
        // check wheather user uploaded image or not
        if(isset($request->image))
        {
            /* check database if user has old image or not */
            // fetch the authenticated user id
            $id = Auth::id();
            // fetch the image name from user tables
            $image = User::find($id)->image;
            // check wheather user has image or not
            if($image)
            {
                // delete old image from upload folder
                unlink('uploads/users/'.$image);
            }
            /* after delete, store new image in the upload folder */
            // generate a new name with new image extension
            $newImageName = rand().'.'.$request->image->getClientOriginalExtension();
            // move new image to uploads folder
            $request->image->move('uploads/users/', $newImageName);

            // update user data with image
            User::where('id', Auth::id())->update([
                'username' => $request->input('name'),
                'email' => $request->input('email'),
                'image' => $newImageName,
                'designation' => $request->input('des')
            ]);
        }
        else
        {
            // update user data without image
            User::where('id', Auth::id())->update([
                'username' => $request->input('name'),
                'email' => $request->input('email'),
                'designation' => $request->input('des')
            ]);
        }
        return redirect(route('profile'))->with('success', 'Your Info updated Successfully!');
    }
}
