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
            return view('posts', [
            'posts' => Post::latest()->orderBy('created_at', 'ASC')->filter(request(['search', 'category', 'author']))->simplePaginate(8),
            'recentPost' => Post::latest()->limit(3)->get(),
            'categories' => Category::all(),
            'users' => User::all(),
            'CurrentCategory' => Category::firstWhere('slug', request('category'))
            ]);
        }

        public function show(Post $post)
        {
            return view('post', ['post' => $post]);

        }

    }
