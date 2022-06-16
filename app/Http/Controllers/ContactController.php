<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        $categories = Category::all();
        return view('pages.contact', ['categories' => $categories]);
    }

    public function store(StoreContactRequest $request){
        // dd($request->all());
        // Contact::create([
        //     'name'=> 'hello',
        //     'email' => 'm@gmail.com',
        //     'subject'=>'nothing',
        //     'message'=>'fhutyrhhch'
        // ]);
        // Contact::create($request->all());
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ]);
        return redirect(url('/contact#successBox'))->with('success', 'Data Stored Successfully!');
    }
}
