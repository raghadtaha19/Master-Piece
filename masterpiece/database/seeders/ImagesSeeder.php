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
                'image1' => 'zarqa.PNG',
                'image2' => 'zarqa.PNG',
                'image3' => 'zarqa.PNG',
                'image4' => 'zarqa.PNG',
                
            ],
            [
                'image1' => 'madaba.PNG',
                'image2' => 'madaba.PNG',
                'image3' => 'madaba.PNG',
                'image4' => 'madaba.PNG',
            ],
            [
                'image1' => 'jerash.PNG',
                'image2' => 'jerash.PNG',
                'image3' => 'jerash.PNG',
                'image4' => 'jerash.PNG',
            ],
            [
                'image1' => 'ham.PNG',
                'image2' => 'ham.PNG',
                'image3' => 'ham.PNG',
                'image4' => 'ham.PNG',
            ],
            [
                'image1' => 'Al-Qastal.PNG',
                'image2' => 'Al-Qastal.PNG',
                'image3' => 'Al-Qastal.PNG',
                'image4' => 'Al-Qastal.PNG',
            ],
            [
                'image1' => 'Iraqal-Amir.PNG',
                'image2' => 'Iraqal-Amir.PNG',
                'image3' => 'Iraqal-Amir.PNG',
                'image4' => 'Iraqal-Amir.PNG',
            ],
        ];

        foreach ($landimages as $landimage) {
            LandImages::create($landimage);
        }
    }
}
