<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('pages/home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('pages/posts',[
        'title'=>'Blog',
        'posts'=> Post::all()
    ]);
});
Route::get('/posts/{slug}',function($slug){
    $post = Post::find($slug);
    return view('pages/post',[
        'title'=>'Post',
        'post'=>$post
    ]);
});

Route::get('/contact', function () {
    return view('pages/contact', ['title' => 'Contact']);
});

Route::get('/about', function () {
    return view('pages/about', ['title' => 'About', 'nama' => 'Iftala']);
});