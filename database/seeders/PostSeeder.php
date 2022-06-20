<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $post = Post::insert([
            "title"=>"Tech today",
            "slug"=>"tech-today",
            "content"=>"Hello Inisev",
            "category"=>"Technology",
            "author"=>1,
            "website_id"=>1, 
        ]);
        $post = Post::insert([
            "title"=>"Electic Cars",
            "slug"=>"electric-cars",
            "content"=>"Tesla is the best",
            "category"=>"Technology",
            "author"=>1,
            "website_id"=>1, 
        ]);
        $post = Post::insert([
            "title"=>"Laravel 9",
            "slug"=>"new laravel 9",
            "content"=>"Things you should know",
            "category"=>"Technology",
            "author"=>1,
            "website_id"=>1, 
        ]);
    }
}
