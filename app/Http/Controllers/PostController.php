<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use http\Env\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{


    // public function index()
    // {
    //     return view('posts', [
    //         'posts' => Post::latest()->filter(request(['search']))->get(),
    //         'categories' => Category::all()
    //     ]);
    // }
   
}
