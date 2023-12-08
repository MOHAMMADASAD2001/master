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
    { {
            // Category::truncate();
            Category::create([
                'name' => 'Rolex',
                'description' => 'Rolex is a prestigious Swiss watchmaker renowned for its precision, luxury, and iconic designs. Its timepieces are a symbol of status and timeless elegance.',
                'image' => 'images/rolex.png',
            ]);
            Category::create([
                'name' => 'smartwatch',
                'description' => 'A smartwatch seamlessly combines style and functionality, offering fitness tracking, notifications, and call features in a sleek wearable design, enhancing the tech-driven lifestyle.',
                'image' => 'images/smart.png',
            ]);
            Category::create([
                'name' => 'Casio',
                'description' => 'Casio is a prominent Japanese electronics company known for producing reliable and affordable digital watches, calculators, and electronic gadgets.',
                'image' => 'images/casio.png',
            ]);
        }
    }
}