<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Pure Pineapple', 'category'=>'Towel', 'image'=>'product-1.jpg', 'price' => '14.00', 'sale_price' => '1', 'quantity' => '5', 'description'=>'nothing'],
            ['name' => 'Guangzhou sweater', 'category'=>'Coat', 'image'=>'product-2.jpg', 'price' => '13.00', 'sale_price' => '0', 'quantity' => '5', 'description'=>'nothing'],
            ['name' => 'Guangzhou sweater', 'category'=>'Shoes', 'image'=>'product-3.jpg', 'price' => '34.00', 'sale_price' => '0', 'quantity' => '5', 'description'=>'nothing'],
            ['name' => 'Microfiber Wool Scarf', 'category'=>'Coat', 'image'=>'product-4.jpg', 'price' => '64.00', 'sale_price' => '0', 'quantity' => '5', 'description'=>'nothing'],
            ['name' => 'Mens Painted Hat', 'category'=>'Shoes', 'image'=>'product-5.jpg', 'price' => '44.00', 'sale_price' => '0', 'quantity' => '5', 'description'=>'nothing'],
            ['name' => 'Converse Shoes', 'category'=>'Shoes', 'image'=>'product-6.jpg', 'price' => '34.00', 'sale_price' => '0', 'quantity' => '5', 'description'=>'nothing'],
            ['name' => 'Pure Pineapple', 'category'=>'Towel', 'image'=>'product-7.jpg', 'price' => '64.00', 'sale_price' => '1', 'quantity' => '5', 'description'=>'nothing'],
            ['name' => '2 Layer Windbreaker', 'category'=>'Coat', 'image'=>'product-8.jpg', 'price' => '44.00', 'sale_price' => '0', 'quantity' => '5', 'description'=>'nothing'],
            ['name' => 'Converse Shoes', 'category'=>'Shoes', 'image'=>'product-9.jpg', 'price' => '34.00', 'sale_price' => '0', 'quantity' => '5', 'description'=>'nothing'],
         ]);
    }
}
