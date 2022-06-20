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
       User::insert([
        'name' =>"User 1 Migambo",
        'email' => 'user1@gmail.com',
        'password' => Hash::make('password'),
       ]);
       User::insert([
        'name' =>"User 2 Migambo",
        'email' => 'user2@hotmail.com',
        'password' => Hash::make('password'),
       ]);
       User::insert([
        'name' =>"User 3 Migambo",
        'email' => 'user2@cheatMail.com',
        'password' => Hash::make('password'),
       ]);

       
    }
}
