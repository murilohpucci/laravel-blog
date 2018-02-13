<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }
}
