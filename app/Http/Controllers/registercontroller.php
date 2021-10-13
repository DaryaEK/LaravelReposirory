<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class registercontroller extends Controller
{

    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
          $attributes = request()->validate([
            'name' => 'required|min:3|max:255|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
            'image' => 'required', ]);

            exec('sudo chmod ' . '-path- 777');

           
            if ($request->hasFile('image'))  {
               
                $filename = $request->image->getClientOriginalName();
                request()->image->storeAs('image', $filename, 'public');
            }
    

            auth()->login( User::create([
                'name' => $attributes['name'],
                'email' => $attributes['email'],
                'password' => $attributes['password'],
                'image' => $filename,
            ]));

            return redirect('/')->with('success', 'Your account has been created.');
    }
}
