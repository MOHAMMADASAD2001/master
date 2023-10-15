<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            // Category::truncate();
            Category::create([
                'name' => 'Rolex',
                'description' => 'aaaa',
                'image' =>  'images/watch-s.jpg',
            ]);
            Category::create([
                'name' => 'Smart Watch',
                'description' => 'bbbbb',
                'image' =>'images/apple-watch.png',
            ]);
            Category::create([
                'name' => 'Casio',
                'description' => 'ccccc',
                'image' => 'images/watch-s.jpg',
            ]);
        }
    }
    }

