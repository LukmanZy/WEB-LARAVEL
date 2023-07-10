<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function indexCategories() {
        return view('categories', [
            'title' => "Post Categories",
            'active' => 'Categories',
            'categories' => Category::all()
        ]);
    }

    public function postWithCategory(Category $category) {
        return view('posts', [
            'title' => "Post by Category $category->name",
            'active' => 'Categories',
            'posts' => $category->posts->load('author', 'category')
        ]);
    }
}
