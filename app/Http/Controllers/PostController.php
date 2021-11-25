<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),  //Filter refers to filter scope in Post.php
            'categories' => Category::all(),
            'currentCategory' => Category::where('slug', request('category'))->first()
        ]);
    }

    public function show(Post $post)
    {
        //Find a post by its slug and pass it to a view called "post"

        return view('post', [
            'post' => $post
        ]);
    }
}
