<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'header' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'image' => 'required',
        ]);
        exec('sudo chmod ' . '-path- 777');

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            request()->image->storeAs('image', $filename, 'public');
        }

        Post::create([
            'slug' => $attributes['slug'],
            'header' => $attributes['header'],
            'body' => $attributes['body'],
            'category_id' => $attributes['category_id'],
            'image' => $filename,
            'user_id' => auth()->id()
        ]);

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([

            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'header' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);


        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/')->with('success', 'Post Deleted!');
    }
}
