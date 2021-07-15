<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PageController extends Controller
{
               
        public function index()
        {
            
            return view('posts', ['posts' => Post::with('category')->get(), 'categories' => Category::all(), 'user' => User::all()]);
        }

        public function show(Post $post)
        {
            return view('post', ['post' => $post]);

        }

    }
