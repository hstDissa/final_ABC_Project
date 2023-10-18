<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedData = [
            ['name' => 'Product 1', 'category' => 1],
            ['name' => 'Product 2', 'category' => 2],
            ['name' => 'Product 3', 'category' => 3],
            ['name' => 'Product 4', 'category' => 4],
            ['name' => 'Product 5', 'category' => 5],
        ];

        // Insert the seed data into the 'products' table using Eloquent
        foreach ($seedData as $data) {
            Product::create($data);
        }
    }
}
