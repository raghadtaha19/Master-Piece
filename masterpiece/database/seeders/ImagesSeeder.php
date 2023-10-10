<?php

namespace Database\Seeders;

use App\Models\LandImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $landimages = [
            [
                'image1' => 'images\zarqa.PNG',
                'image2' => 'images\zarqa.PNG',
                'image3' => 'images\zarqa.PNG',
                'image4' => 'images\zarqa.PNG',
            
            ],
            [
                'image1' => 'images\madaba.PNG',
                'image2' => 'images\madaba.PNG',
                'image3' => 'images\madaba.PNG',
                'image4' => 'images\madaba.PNG',
            ],
            [
                'image1' => 'images\jerash.PNG',
                'image2' => 'images\jerash.PNG',
                'image3' => 'images\jerash.PNG',
                'image4' => 'images\jerash.PNG',
            ],
            [
                'image1' => 'images\ham.PNG',
                'image2' => 'images\ham.PNG',
                'image3' => 'images\ham.PNG',
                'image4' => 'images\ham.PNG',
            ],
            [
                'image1' => 'images\Al-Qastal.PNG',
                'image2' => 'images\Al-Qastal.PNG',
                'image3' => 'images\Al-Qastal.PNG',
                'image4' => 'images\Al-Qastal.PNG',
            ],
            [
                'image1' => 'images\Iraq al-Amir.PNG',
                'image2' => 'images\Iraq al-Amir.PNG',
                'image3' => 'images\Iraq al-Amir.PNG',
                'image4' => 'images\Iraq al-Amir.PNG',
            ],
        ];

        foreach ($landimages as $landimage) {
            LandImages::create($landimage);
        }
    }
}
