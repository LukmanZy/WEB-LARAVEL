<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {
        return view('posts', [
            'title' => 'All Post',
            'active' => 'Post',
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()
        ]);
    }

    public function showContent(Post $post) {
        return view('post', [
            'title' => 'single-post',
            'active' => 'Post',
            'post' => $post
        ]);
    }
}
