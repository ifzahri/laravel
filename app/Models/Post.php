<?php

namespace App\Models;

use Illuminate\Support\Arr;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;
    public static function find($slug): array
    {
        $post = Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        if (!$post) abort(404);
        return $post;
    }
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'article-1',
                'title' => 'Article 1',
                'author' => 'Iftala',
                'date' => '11 September 2024',
                'body' => 'Aku vudom.'
            ],
            [
                'id' => 2,
                'slug' => 'article-2',
                'title' => 'Article 2',
                'author' => 'Zahri',
                'date' => '11 September 2024',
                'body' => 'Aku vudom.'
            ],
            [
                'id' => 3,
                'slug' => 'article-3',
                'title' => 'Article 3',
                'author' => 'Sukmana',
                'date' => '11 September 2024',
                'body' => 'Aku vudom.'
            ]
        ];
    }
}
