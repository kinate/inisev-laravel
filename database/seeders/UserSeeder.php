<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name' =>"Test user 1",
        'email' => '6ddf9bebdc-42dd66@inbox.mailtrap.io',
        'password' => Hash::make('password'),
       ]);
       User::create([
        'name' =>"Test user 2",
        'email' => '6ddf9bebdc-42dd66e@inbox.mailtrap.io',
        'password' => Hash::make('password'),
       ]);
       User::create([
        'name' =>"Test user 3",
        'email' => '6ddf9bebdc-42dd66d@inbox.mailtrap.io',
        'password' => Hash::make('password'),
       ]);

       
    }
}
