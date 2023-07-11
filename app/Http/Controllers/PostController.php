<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index() {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' .$category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by '.$author->name;
        }
        return view('posts', [
            'title' => 'All Post'.$title,
            'active' => 'Post',
            'posts' => Post::latest()->filter(request(['search', 'category','author']))->get()
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
