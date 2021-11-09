<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $attributes = $this->validatePost();

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        auth()->user()->posts()->create($attributes);

        return redirect('/')->with('success', 'Success!');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $attributes =  $this->validatePost($post);

        if(isset($attributes['thumbnail'])){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        
        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destory(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post Deleted!');
    }

    public function validatePost(?Post $post =  null)
    {
        return request()->validate([
            'title' => ['required'],
            'thumbnail' => $post ? ['image'] : ['image', 'required'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt' => ['required'],
            'body' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }
}
