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
            'name' => 'Men',
            'description' => 'CASIO CLASSIC DESIGN BLACK LEATHER SILVER DIAL For Men',
            'price' => '30',
            'image' => 'images/casioo.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'APPLE',
            'description' => 'APPLE Watch Series 7 Aluminium Case with Clover Sport Band GPS 41mm  Green',
            'price' => '100',
            'image' => 'images/s2.png',
            'discount' => '2',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'CASIO ENTICER BROWN LEATHER DAY & DATE For Men',
            'price' => '15',
            'image' => 'images/casioo3.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
     
        Product::create([
            'name' => 'Men',
            'description' => 'CASIO CLASSIC DESIGN BLACK LEATHER SILVER DIAL For Men',
            'price' => '25',
            'image' => 'images/casioo.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'CASIO ANALOG WITH DATE BLACK LEATHER BLACK DIAL For Men',
            'price' => '15',
            'image' => 'images/casioo1.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Women',
            'description' => 'CASIO GENERAL BLACK LEATHER BLACK DIAL For Women',
            'price' => '20',
            'image' => 'images/casioo2.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'CASIO ENTICER BROWN LEATHER DAY & DATE For Men',
            'price' => '10',
            'image' => 'images/casioo3.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'CASIO STANDARD BROWN LEATHER SILVER DIAL For Men',
            'price' => '30',
            'image' => 'images/casioo4.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'CASIO ANALOG BLACK RUBBER BLACK DIAL For Men',
            'price' => '20',
            'image' => 'images/casioo5.png',
            'discount' => '2',
            'category_id' => '3'
        ]);

        Product::create([
            'name' => 'Men',
            'description' => 'Rolex luxury watch plated in silver and gold for men',
            'price' => '20',
            'image' => 'images/rolex1.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Women',
            'description' => 'Rolex luxury watch plated in silver and gold for Women',
            'price' => '15',
            'image' => 'images/rolex1.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'A luxurious gold-plated Rolex watch with a distinctive black interior for men',
            'price' => '30',
            'image' => 'images/rolex2.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'CASIO ANALOG WITH DATE BLACK LEATHER BLACK DIAL For Men',
            'price' => '20',
            'image' => 'images/casioo1.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Women',
            'description' => 'CASIO GENERAL BLACK LEATHER BLACK DIAL For Women',
            'price' => '25',
            'image' => 'images/casioo2.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Women',
            'description' => 'A luxurious gold-plated Rolex watch with a distinctive black interior for women',
            'price' => '25',
            'image' => 'images/rolex2.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'A luxurious silver-plated Rolex watch with a distinctive black interior for men',
            'price' => '20',
            'image' => 'images/rolex3.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Women',
            'description' => 'A luxurious silver-plated Rolex watch with a distinctive black interior for women',
            'price' => '15',
            'image' => 'images/rolex3.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'A luxury Rolex watch plated in silver and gold, with a distinctive black interior for men',
            'price' => '35',
            'image' => 'images/rolex4.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Women',
            'description' => 'A luxury Rolex watch plated in silver and gold, with a distinctive black interior for women',
            'price' => '30',
            'image' => 'images/rolex4.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'A luxurious gold-plated Rolex watch with a distinctive black interior for men',
            'price' => '25',
            'image' => 'images/rolex6.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Women',
            'description' => 'A luxurious gold-plated Rolex watch with a distinctive black interior for women',
            'price' => '15',
            'image' => 'images/rolex6.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'The distinctive black and gold Rolex Master watch for men',
            'price' => '15',
            'image' => 'images/rolex5.png',
            'discount' => '2',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Kalobee',
            'description' => 'Kalobee H40 Smart Watch NFC Bluetooth Handsfree Call IP68 Waterproof Music Sports 1.3 inch HD Color Screen Watch',
            'price' => '75',
            'image' => 'images/s1.png',
            'discount' => '2',
            'category_id' => '2'
        ]);
       
        Product::create([
            'name' => 'APPLE',
            'description' => 'APPLE Watch Series 7 Aluminium Case with Clover Sport Band GPS 41mm  Green',
            'price' => '100',
            'image' => 'images/s2.png',
            'discount' => '2',
            'category_id' => '2'
        ]);
        // Product::create([
        //     'name' => 'watch',
        //     'description' => 'T200 Plus Smart Watch',
        //     'price' => '20',
        //     'image' => 'images/w1.png',
        //     'discount' => '2',
        //     'category_id' => '2'
        // ]);
        Product::create([
            'name' => 'LENYES',
            'description' => 'LENYES Smart Watch 1.32″ Black',
            'price' => '65',
            'image' => 'images/s3.png',
            'discount' => '2',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'XIAOMI',
            'description' => 'XIAOMI Redmi 2 Lite Watch 1.55″ Black',
            'price' => '70',
            'image' => 'images/s4.png',
            'discount' => '2',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'Kalobee',
            'description' => 'Kalobee H40 Smart Watch NFC Bluetooth Handsfree Call IP68 Waterproof Music Sports 1.3 inch HD Color Screen Watch',
            'price' => '75',
            'image' => 'images/s1.png',
            'discount' => '2',
            'category_id' => '2'
        ]);
       
      
        // Product::create([
        //     'name' => 'watch',
        //     'description' => 'T200 Plus Smart Watch',
        //     'price' => '20',
        //     'image' => 'images/w1.png',
        //     'discount' => '2',
        //     'category_id' => '2'
        // ]);
        Product::create([
            'name' => 'LENYES',
            'description' => 'LENYES Smart Watch 1.32″ Black',
            'price' => '65',
            'image' => 'images/s3.png',
            'discount' => '2',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'XIAOMI',
            'description' => 'XIAOMI Redmi 2 Lite Watch 1.55″ Black',
            'price' => '70',
            'image' => 'images/s4.png',
            'discount' => '2',
            'category_id' => '2'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'CASIO STANDARD BROWN LEATHER SILVER DIAL For Men',
            'price' => '35',
            'image' => 'images/casioo4.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
        Product::create([
            'name' => 'Men',
            'description' => 'CASIO ANALOG BLACK RUBBER BLACK DIAL For Men',
            'price' => '25',
            'image' => 'images/casioo5.png',
            'discount' => '2',
            'category_id' => '3'
        ]);
    }
}
