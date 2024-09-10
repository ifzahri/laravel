<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home', ['title' => 'Home']);
});

Route::get('/blog', function () {
    return view('pages/blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('pages/contact', ['title' => 'Contact']);
});

Route::get('/about', function () {
    return view('pages/about', ['title' => 'About', 'nama' => 'Iftala']);
});