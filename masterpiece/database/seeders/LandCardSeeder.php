<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LandCard;


class LandCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       $landcards = [
        [
            'image' => 'images\zarqa.png',
            'land_type' => 'Residential Land',
            'price' => '35.000 Jd',
            'governorate' => 'Zarqa',
            'district' => 'Birayn',
            'area' => '510 m2',
          
           
        ],
        [
            'image' => 'images\madaba.png', 
            'land_type' => 'Commercial Land',
            'price' => '10.000 Jd',
            'governorate' => 'Madaba',
            'district' => 'Dhiban',
            'area' => '10000 m2',
            
        ],
        [
            'image' => 'images\jerash.png', 
            'land_type' => 'Agricultural Land',
            'price' => '25.000 Jd',
            'governorate' => 'Jerash',
            'district' => 'Anaiba',
            'area' => '500 m2',
           
        ],
        [
            'image' => 'images\ham.png',
            'land_type' => 'Residential Land',
            'price' => '12.345 Jd',
            'governorate' => 'Irbid',
            'district' => 'Ham',
            'area' => '1000 m2',
          
        ],
        [
            'image' => 'images\Al-Qastal.png', 
            'land_type' => 'Commercial Land',
            'price' => '15.000 Jd',
            'governorate' => 'Amman',
            'district' => 'Al-Qastal',
            'area' => '500 m2',
            
        ],
        [
            'image' => 'images\Iraqal-Amir.png', 
            'land_type' => 'Agricultural Land',
            'price' => '40.000 Jd',
            'governorate' => 'Amman',
            'district' => 'Iraq al-Amir',
            'area' => '5000 m^2',
          
        ],
    ];


    foreach ($landcards as $landcard) {
        LandCard::create($landcard);
    }
    }
} 
