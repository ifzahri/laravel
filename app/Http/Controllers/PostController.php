<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => 'Article 1',
                'author' => 'Iftala',
                'date' => '11 September 2024',
                'body' => 'Aku vudom.'
            ],
            [
                'title' => 'Article 2',
                'author' => 'Zahri',
                'date' => '11 September 2024',
                'body' => 'Aku vudom.'
            ],
            [
                'title' => 'Article 3',
                'author' => 'Sukmana',
                'date' => '11 September 2024',
                'body' => 'Aku vudom.'
            ]
        ];
        return view('posts', [
            'title' => 'Blog',
            'posts' => $posts
        ]);
    }
}
