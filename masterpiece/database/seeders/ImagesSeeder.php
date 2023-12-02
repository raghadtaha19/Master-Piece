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
                'image1' => 'jordan-street.webp',
                'image2' => 'jordanstr.webp',
                'image3' => 'jordan-street.webp',
                'image4' => 'jordanstr.webp',
                
            ],
            [
                'image1' => '992390ba8e93a312dfce920f4c066d69c125f4f7037ef09039c88ab4470dea2b.jpg.webp',
                'image2' => '992390ba8e93a312dfce920f4c066d69c125f4f7037ef09039c88ab4470dea2b.jpg.webp',
                'image3' => 'b883552b3ef85612a64a73a7fe04f4082cbf8b0559dc8aeba0acb5de2ba10715.jpg.webp',
                'image4' => 'ce0b244632636f02ca5ccc2f24dbabf900808b2590aeeef23787081826c568a4.jpg.webp',
            ],
            [
                'image1' => 'AbuAlanda2.webp',
                'image2' => 'AbuAlanda.webp',
                'image3' => 'jerash.PNG',
                'image4' => 'jerash.PNG',
            ],
            [
                'image1' => 'ham.PNG',
                'image2' => 'ham1.webp',
                'image3' => 'ham2.webp',
                'image4' => 'ham3.webp',
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
            [
                'image1' => 'Sweileh.webp',
                'image2' => 'Sweileh.webp',
                'image3' => 'Sweileh.webp',
                'image4' => 'Sweileh.webp',
            ],
            [
                'image1' => 'King Abdullah Hospital.webp',
                'image2' => 'King Abdullah Hospital1.webp',
                'image3' => 'King Abdullah Hospital2.webp',
                'image4' => 'King Abdullah Hospital.webp',
            ],
            [
                'image1' => 'University of Science and Technology1.webp',
                'image2' => 'University of Science and Technology2.webp',
                'image3' => 'University of Science and Technology2.webp',
                'image4' => 'University of Science and Technology3.webp',
            ],
            [
                'image1' => 'zabda1.webp',
                'image2' => 'zabda2.webp',
                'image3' => 'zabda1.webp',
                'image4' => 'zabda2.webp',
            ],
            [
                'image1' => 'husun.webp',
                'image2' => 'husun.webp',
                'image3' => 'husun.webp',
                'image4' => 'husun.webp',
            ],
            [
                'image1' => 'Idon Military Hospital1.webp',
                'image2' => 'Idon Military Hospital2.webp',
                'image3' => 'Idon Military Hospital3.webp',
                'image4' => 'Idon Military Hospital4.webp',
            ],
            [
                'image1' => 'Al-Tanaib1.webp',
                'image2' => 'Al-Tanaib2.webp',
                'image3' => 'Al-Tanaib3.webp',
                'image4' => 'Al-Tanaib4.webp4',
            ],
            [
                'image1' => 'White mountain1.webp',
                'image2' => 'White mountain2.webp',
                'image3' => 'White mountain2.webp',
                'image4' => 'White mountain1.webp',
            ],
            [
                'image1' => 'kamsha1.webp',
                'image2' => 'kamsha2.webp',
                'image3' => 'kamsha3.webp',
                'image4' => 'kamsha4.webp',
            ],
        ];

        foreach ($landimages as $landimage) {
            LandImages::create($landimage);
            
        }
    }
}
