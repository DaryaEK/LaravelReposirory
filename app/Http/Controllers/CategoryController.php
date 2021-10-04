<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{

        public function index(Category $category)
        {
            return view('posts', [
                'posts' => $category->posts,
                'recentPost' => $category->posts->sortByDesc('created_at')->take(3),
                'currentCategory' => $category,
                'categories' => Category::all(),
                'users' => User::all()
            ]);
        }
    }