<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    PageController::class, 'index'
])->name('post.main');

Route::get('/posts/{post:slug}', [
    PageController::class, 'show'
])->name('post.show');

Route::get('posts/categories/{category}', function (Category $category)
{
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('posts/user/{user}', function (User $user)
{
    return view('posts', [
        'posts' => $user->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});



