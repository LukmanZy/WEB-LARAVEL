<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Post $post) {
        return view('about', [
            'title' => 'About',
            'active' => 'about',
            'image' => 'lukman.jpg',
            'profiles' => User::where('id', auth()->user()->id)->get()
        ]);
    }
}
