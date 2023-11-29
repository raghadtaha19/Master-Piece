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
                'image' => 'icon-apartment.png',
            ],
            [
                'name' => 'Residential Land',
                'image' => 'icon-villa.png',
            ],
            [
                'name' => 'Commercial Land',
                'image' => 'icon-house.png',
            ],
        ];
    

        // Insert categories into the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
