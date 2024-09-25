<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    return view('pages/home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('pages/posts', [
        'title' => 'Blog',
        'posts' => Post::all()
    ]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('pages/post', [
        'title' => 'Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('pages/contact', ['title' => 'Contact']);
});

Route::get('/about', function () {
    return view('pages/about', ['title' => 'About', 'nama' => 'Iftala']);
});

route::get('/authors/{user:username}', function (User $user) {
    return view('pages/posts', [
        'title' => 'Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('pages/posts',[
        'title'=>'Articles in: '.$category->name,
        'posts'=>$category->posts
    ]);
});
