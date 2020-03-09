<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'  => 'Huawei P30', 
            'price' => 400.00,
        ]);

        Product::create([
            'name'  => 'Xiaomi Mi A3', 
            'price' => 419,
        ]);

        Product::create([
            'name'  => 'Samsung Galaxy S10', 
            'price' => 1399.32,
        ]);

        Product::create([
            'name'  => 'Samsung Galaxy A20e', 
            'price' => 299,
        ]);

        Product::create([
            'name'  => 'Huawei Y7', 
            'price' => 319.50,
        ]);

        Product::create([
            'name'  => 'LG K50', 
            'price' => 329,
        ]);

        Product::create([
            'name'  => 'Huawei P smart Pro', 
            'price' => 599.99,
        ]);

        Product::create([
            'name'  => 'Xiaomi Mi 9', 
            'price' => 919,
        ]);

        Product::create([
            'name'  => 'Meizu C9 Pro', 
            'price' => 155,
        ]);

        Product::create([
            'name'  => 'Apple iPhone 6S', 
            'price' => 699.99,
        ]);

        Product::create([
            'name'  => 'Apple iPhone 11', 
            'price' => 1989,
        ]);

        Product::create([
            'name'  => 'Apple iPhone 11 Pro Max', 
            'price' => 2579,
        ]);

        Product::create([
            'name'  => 'Motorola Moto G6 Plus', 
            'price' => 509.60,
        ]);

        Product::create([
            'name'  => 'Asus ZenFone 4', 
            'price' => 1009.99,
        ]);
    }
}
