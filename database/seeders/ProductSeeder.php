<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Devices',
            'description' => 'aaaa',
            'price' => '25',
            'image' => 'images/w1.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Devices',
            'description' => 'aaaa',
            'price' => '25',
            'image' => 'images/w2.png',
            'discount' => '2',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'Devices',
            'description' => 'aaaa',
            'price' => '25',
            'image' => 'images/w3.png',
            'discount' => '2',
            'category_id' => '3'
        ]);

        Product::create([
            'name' => 'Devices',
            'description' => 'aaaa',
            'price' => '25',
            'image' => 'images/w4.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Devices',
            'description' => 'aaaa',
            'price' => '25',
            'image' => 'images/w5.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
    }
}
