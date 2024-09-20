<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'slug' => 'article-1',
                'title' => 'Article 1',
                'author' => 'Iftala',
                'body' => 'Aku vudom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'slug' => 'article-2',
                'title' => 'Article 2',
                'author' => 'Zahri',
                'body' => 'Aku vudom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'slug' => 'article-3',
                'title' => 'Article 3',
                'author' => 'Sukmana',
                'body' => 'Aku vudom.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
