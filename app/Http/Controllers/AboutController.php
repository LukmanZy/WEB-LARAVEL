<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('about', [
            'title' => 'Page About',
            'active' => 'About',
            'name'=> 'Lukman Hakim',
            'email' => 'hlukman69696@gmail.com',
            'image' => 'lukman.jpg'
        ]);
    }
}
