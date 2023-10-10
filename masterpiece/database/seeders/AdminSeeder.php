<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'raghad',
                'email' => 'raghad@gmail.com',
                'password' => '12345678',
            ],
          
        ];
    

        // Insert categories into the database
        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
