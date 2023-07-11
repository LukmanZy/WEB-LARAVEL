<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'Home'
    ]);
});

Route::get('/about',[AboutController::class, 'index']);


Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'showContent']);

Route::get('/categories', [CategoriesController::class, 'indexCategories']);

// Route::get('/categories/{category:slug}', [CategoriesController::class, 'postWithCategory']);
// Route::get('/authors/{author:username}', [AuthorController::class, 'index']);

