<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

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

Route::get('/', [PageController::class, 'index'])->name('post.main');

Route::get('/posts/{post:slug}', [PageController::class, 'show'])->name('post.show');

Route::get('/category/{category:slug}', [CategoryController::class, 'index']);

Route::get('/user/{user:name}', [UserController::class, 'index']);

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');



Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('auth');
Route::post('/posts', [AdminPostController::class, 'store'])->middleware('auth');

Route::get('/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('auth');
Route::patch('/posts/{post}', [AdminPostController::class, 'update'])->middleware('auth');

Route::get('/posts/{post}/delete', [AdminPostController::class, 'destroy'])->middleware('admin');

Route::group(['middleware' => 'role:autor'], function() {
    Route::get('/posts', function() {
       return '?????????? ????????????????????';
    });
});

Route::get('logout', [SessionsController::class, 'destroy'])->middleware('auth');
