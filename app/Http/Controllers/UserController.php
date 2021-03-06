<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class UserController extends Controller
{

        public function index(User $user)
        {
            return view('posts', [
                'posts' => $user->posts()->paginate(8),
                'recentPost' => $user->posts->sortByDesc('created_at')->take(3)->values(),
                'categories' => Category::all(),
                'currentAuthor' => $user,
                'users' => User::all()
            ]);
        }
    }
