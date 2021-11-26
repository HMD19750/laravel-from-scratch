<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()  //Filter refers to filter scope in Post.php

        ]);
    }

    public function show(Post $post)
    {
        //Find a post by its slug and pass it to a view called "post"

        return view('posts.show', [
            'post' => $post
        ]);
    }
}
