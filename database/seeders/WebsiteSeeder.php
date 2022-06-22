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
      Website::create([
           "name"=> "Web saiti 1",
                ]);
      Website::create([
           "name"=> "Web saiti 2",
                ]);
      Website::create([
           "name"=> "Web saiti 3",
                ]);
      Website::create([
           "name"=> "Web saiti 4",
                ]);
      Website::create([
           "name"=> "Web saiti 5",
                ]);
      Website::create([
           "name"=> "Web saiti 6",
                ]);
      Website::create([
           "name"=> "Web saiti 7",
                ]);
    }
}
