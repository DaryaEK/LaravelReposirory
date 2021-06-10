<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
               
        public function index()
        {
            
            return view('posts', ['posts' => Post::all()]);
        }

        public function show(Post $post)
        {
            return view('post', ['post' => $post]);

        }

    }
