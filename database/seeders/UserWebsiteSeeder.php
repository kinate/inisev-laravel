<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('user_website')->insert([
        "user_id"=>1,
        "website_id"=>1
    ]);
    DB::table('user_website')->insert([
        "user_id"=>1,
        "website_id"=>2
    ]);
    DB::table('user_website')->insert([
        "user_id"=>1,
        "website_id"=>3
    ]);
    DB::table('user_website')->insert([
        "user_id"=>2,
        "website_id"=>3
    ]);
    DB::table('user_website')->insert([
        "user_id"=>3,
        "website_id"=>3
    ]);
    }
}
