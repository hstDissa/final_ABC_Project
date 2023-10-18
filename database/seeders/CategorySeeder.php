<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedData = [
            ['category' => 'Category 1'],
            ['category' => 'Category 2'],
            ['category' => 'Category 3'],
            ['category' => 'Category 4'],
            ['category' => 'Category 5'],
        ];

        // Insert the seed data into the 'products' table using Eloquent
        foreach ($seedData as $data) {
            category::create($data);
        }
    }
}
