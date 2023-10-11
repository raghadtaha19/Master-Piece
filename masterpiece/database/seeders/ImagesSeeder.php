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
                'image1' => 'http://127.0.0.1:8000/images/zarqa.PNG',
                'image2' => 'http://127.0.0.1:8000/images/zarqa.PNG',
                'image3' => 'http://127.0.0.1:8000/images/zarqa.PNG',
                'image4' => 'http://127.0.0.1:8000/images/zarqa.PNG',
                
            ],
            [
                'image1' => 'http://127.0.0.1:8000/images/madaba.PNG',
                'image2' => 'http://127.0.0.1:8000/images/madaba.PNG',
                'image3' => 'http://127.0.0.1:8000/images/madaba.PNG',
                'image4' => 'http://127.0.0.1:8000/images/madaba.PNG',
            ],
            [
                'image1' => 'http://127.0.0.1:8000/images/jerash.PNG',
                'image2' => 'http://127.0.0.1:8000/images/jerash.PNG',
                'image3' => 'http://127.0.0.1:8000/images/jerash.PNG',
                'image4' => 'http://127.0.0.1:8000/images/jerash.PNG',
            ],
            [
                'image1' => 'http://127.0.0.1:8000/images/ham.PNG',
                'image2' => 'http://127.0.0.1:8000/images/ham.PNG',
                'image3' => 'http://127.0.0.1:8000/images/ham.PNG',
                'image4' => 'http://127.0.0.1:8000/images/ham.PNG',
            ],
            [
                'image1' => 'http://127.0.0.1:8000/images/Al-Qastal.PNG',
                'image2' => 'http://127.0.0.1:8000/images/Al-Qastal.PNG',
                'image3' => 'http://127.0.0.1:8000/images/Al-Qastal.PNG',
                'image4' => 'http://127.0.0.1:8000/images/Al-Qastal.PNG',
            ],
            [
                'image1' => 'http://127.0.0.1:8000/images/Iraqal-Amir.PNG',
                'image2' => 'http://127.0.0.1:8000/images/Iraqal-Amir.PNG',
                'image3' => 'http://127.0.0.1:8000/images/Iraqal-Amir.PNG',
                'image4' => 'http://127.0.0.1:8000/images/Iraqal-Amir.PNG',
            ],
        ];

        foreach ($landimages as $landimage) {
            LandImages::create($landimage);
        }
    }
}
