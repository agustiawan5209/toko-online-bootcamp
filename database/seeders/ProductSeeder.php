<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            [
                'name' => 'Laptop',
                'description' => 'A high-performance laptop',
                'stock' => 10,
                'price' => 3000.00,
                'image' => 'laptop.jpg',
                'category_id' => 1, // Electronics
            ],
            [
                'name' => 'Novel',
                'description' => 'A best-selling novel',
                'stock' => 50,
                'price' => 1500.00,
                'image' => 'novel.jpg',
                'category_id' => 2, // Books
            ],
            [
                'name' => 'T-Shirt',
                'description' => 'Comfortable cotton t-shirt',
                'stock' => 100,
                'price' => 1000.00,
                'image' => 'tshirt.jpg',
                'category_id' => 3, // Clothing
            ],
        ]);
    }
}
