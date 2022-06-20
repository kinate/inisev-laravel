<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Website::insert([
           "name"=> "Web saiti 1",
                ]);
      Website::insert([
           "name"=> "Web saiti 2",
                ]);
      Website::insert([
           "name"=> "Web saiti 3",
                ]);
      Website::insert([
           "name"=> "Web saiti 4",
                ]);
      Website::insert([
           "name"=> "Web saiti 5",
                ]);
      Website::insert([
           "name"=> "Web saiti 6",
                ]);
      Website::insert([
           "name"=> "Web saiti 7",
                ]);
    }
}
