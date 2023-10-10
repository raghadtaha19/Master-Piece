<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SellForm;


class SellFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sellforms = [
            [
                'land_type' => 'Residential Land',
                'price' => '35.000 Jd',
                'area' => '510 m2',
                'description' => 'A beautiful residential property.',
                'additional_information' => 'Some additional information.',
                'user_id' => '1',
                'ID_number' => '12345',
                'category_id' => '1',
                'governorate' => 'Zarqa',
                'district' => 'Birayn',
            ],
            [
                'land_type' => 'Commercial Land',
                'price' => '10.000 Jd',
                'area' => '10.000 m2',
                'description' => 'A beautiful residential property.',
                'additional_information' => 'Some additional information.',
                'user_id' => '1',
                'ID_number' => '12345',
                'category_id' => '1',
                'governorate' => 'Madaba',
                'district' => 'Dhiban',
            ],
            [
                'land_type' => 'Agricultural Land',
                'price' => '25.000 Jd',
                'area' => '500 m2',
                'description' => 'A beautiful residential property.',
                'additional_information' => 'Some additional information.',
                'user_id' => '1',
                'ID_number' => '12345',
                'category_id' => '1',
                'governorate' => 'Jerash',
                'district' => 'Anaiba',
            ],
            [
                'land_type' => 'Residential Land',
                'price' => '12.345 Jd',
                'area' => '1000 m2',
                'description' => 'A beautiful residential property.',
                'additional_information' => 'Some additional information.',
                'user_id' => '1',
                'ID_number' => '12345',
                'category_id' => '1',
                'governorate' => 'Irbid',
                'district' => 'Ham',
            ],
            [
                'land_type' => 'Commercial Land',
                'price' => '15.000 Jd',
                'area' => '500 m2',
                'description' => 'A beautiful residential property.',
                'additional_information' => 'Some additional information.',
                'user_id' => '1',
                'ID_number' => '12345',
                'category_id' => '1',
                'governorate' => 'Amman',
                'district' => 'Al-Qastal',
            ],
            [
                'land_type' => 'Agricultural Land',
                'price' => '40.000 Jd',
                'area' => '5000 m^2',
                'description' => 'A beautiful residential property.',
                'additional_information' => 'Some additional information.',
                'user_id' => '1',
                'ID_number' => '12345',
                'category_id' => '1',
                'governorate' => 'Amman',
                'district' => 'Iraq al-Amir',
            ],
        ];
        //     [
        //         // 'image1' => 'images\zarqa.PNG',
        //         // 'image2' => 'images\zarqa.PNG',
        //         // 'image3' => 'images\zarqa.PNG',
        //         // 'image4' => 'images\zarqa.PNG',
        //         'governorate' => 'Zarqa',
        //         'district' => 'Birayn',
        //         'price' => '50000',
        //         'area' => '1000',
        //         'land_type' => 'Residential',
        //         'description' => 'A beautiful residential property.',
        //         'additional_information' => 'Some additional information.',
        //         'user_id' => '1',
        //         'category_id' => '1',
        //         'ID_number' => '12345',

                
        //     ],
        //     [
        //         // 'image1' => 'images\madaba.PNG',
        //         // 'image2' => 'images\madaba.PNG',
        //         // 'image3' => 'images\madaba.PNG',
        //         // 'image4' => 'images\madaba.PNG',
        //         'governorate' => 'Madaba',
        //         'district' => 'Dhiban',
        //         'price' => '10,000 Jd',
        //         'area' => '10,000 m2',
        //         'land_type' => 'Commercial Land',
        //         'description' => 'A beautiful residential property.',
        //         'additional_information' => 'Some additional information.',
        //         'user_id' => '1',
        //         'category_id' => '1',
        //         'ID_number' => '12345',

        //     ],
        //     [
        //         // 'image1' => 'images\jerash.PNG',
        //         // 'image2' => 'images\jerash.PNG',
        //         // 'image3' => 'images\jerash.PNG',
        //         // 'image4' => 'images\jerash.PNG',
        //         'governorate' => 'Jerash',
        //         'district' => 'Anaiba',
        //         'price' => '25,000 Jd',
        //         'area' => '500 m2',
        //         'land_type' => 'Agricultural Land',
        //         'description' => 'A beautiful residential property.',
        //         'additional_information' => 'Some additional information.',
        //         'user_id' => '1',
        //         'category_id' => '1',
        //         'ID_number' => '12345',

        //     ],
        //     [
        //         // 'image1' => 'images\ham.PNG',
        //         // 'image2' => 'images\ham.PNG',
        //         // 'image3' => 'images\ham.PNG',
        //         // 'image4' => 'images\ham.PNG',
        //         'governorate' => 'Irbid',
        //         'district' => 'Ham',
        //         'price' => '12.345 Jd',
        //         'area' => '1000 m2',
        //         'land_type' => 'Residential Land',
        //         'description' => 'A beautiful residential property.',
        //         'additional_information' => 'Some additional information.',
        //         'user_id' => '1',
        //         'category_id' => '1',
        //         'ID_number' => '12345',

        //     ],
        //     [
        //         // 'image1' => 'images\Al-Qastal.PNG',
        //         // 'image2' => 'images\Al-Qastal.PNG',
        //         // 'image3' => 'images\Al-Qastal.PNG',
        //         // 'image4' => 'images\Al-Qastal.PNG',
        //         'governorate' => 'Amman',
        //         'district' => 'Al-Qastal',
        //         'price' => '15.000 Jd',
        //         'area' => '500 m2',
        //         'land_type' => 'Commercial Land',
        //         'description' => 'A beautiful residential property.',
        //         'additional_information' => 'Some additional information.',
        //         'user_id' => '1',
        //         'category_id' => '1',
        //         'ID_number' => '12345',

        //     ],
        //     [
        //         // 'image1' => 'images\Iraq al-Amir.PNG',
        //         // 'image2' => 'images\Iraq al-Amir.PNG',
        //         // 'image3' => 'images\Iraq al-Amir.PNG',
        //         // 'image4' => 'images\Iraq al-Amir.PNG',
        //         'governorate' => 'Amman',
        //         'district' => 'Iraq al-Amir',
        //         'price' => '40.000 Jd',
        //         'area' => '5000 m^2',
        //         'land_type' => 'Agricultural Land',
        //         'description' => 'A beautiful residential property.',
        //         'additional_information' => 'Some additional information.',
        //         'user_id' => '1',
        //         'category_id' => '1',
        //         'ID_number' => '12345',
                
        //     ],
        
            
        // ];
        foreach ($sellforms as $sellform) {
            SellForm::create($sellform);
        }
    }
}
