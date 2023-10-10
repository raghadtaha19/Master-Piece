<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define categories
        $categories = [
            [
                'name' => 'Agricultural Land',
                'image' => 'images/icon-apartment.png',
            ],
            [
                'name' => 'Residential Land',
                'image' => 'images/icon-villa.png',
            ],
            [
                'name' => 'Commercial Land',
                'image' => 'images/icon-house.png',
            ],
        ];
    

        // Insert categories into the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
