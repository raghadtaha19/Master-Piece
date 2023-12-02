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
            'image' => 'jordan-street.webp',
            'land_type' => 'Residential Land',
            'price' => '130000 Jd',
            'governorate' => 'Amman',
            'district' => 'Jordan Street',
            'area' => '972 m2',
            'description' =>'In the vicinity, there are various facilities and services conveniently located, including a restaurant, school, supermarket, shopping mall, gym, hospital, mosque, dry cleaner, parking lot, bank/ATM, and pharmacy.',
            'additional_information' => 'A piece of land located within the doctors residential area with access to two streets, situated 50 meters away from Jordan Street. This land is suitable for residential purposes and offers a scenic view.',
          
           
        ],
        [
            'image' => '992390ba8e93a312dfce920f4c066d69c125f4f7037ef09039c88ab4470dea2b.jpg.webp', 
            'land_type' => 'Agricultural Land',
            'price' => '14500 Jd',
            'governorate' => 'Amman',
            'district' => 'AL-Zmailah',
            'area' => '10000 m2',
            'description' =>
            'Village Name: Breek
            
            Plot 8
            
            Located in the southern lands of Oman, affiliated with the Capital Governorate.
            
            Area: Ten dunams, demarcated with an independent registration document.
            
            Serviced with paved roads and electricity, as shown in the pictures.
            
            The land is situated on two streets.'
        ],
        [
            'image' => 'AbuAlanda.webp', 
            'land_type' => 'Commercial Land',
            'price' => '12000 Jd',
            'governorate' => 'Amman',
            'district' => 'Airport Road',
            'area' => '10003 m2',
            'description' => '
            Land for sale in the Al-Suwaiq area, Block Number 7, Al-Kassarah, located 20 kilometers from the airport bridge, and it is part of Ammans lands. The land is situated on a 30-meter asphalt road and has independent boundaries on three sides.
            This property is suitable for investment or for establishing a farm. It benefits from paved roads and easy access to the airport bridge.',
           
        ],
        [
            'image' => 'ham.png',
            'land_type' => 'Residential Land',
            'price' => '13345 Jd',
            'governorate' => 'Irbid',
            'district' => 'Ham',
            'area' => '1000 m2',
          
        ],
        [
            'image' => 'Al-Qastal.png', 
            'land_type' => 'Commercial Land',
            'price' => '15000 Jd',
            'governorate' => 'Amman',
            'district' => 'Al-Qastal',
            'area' => '500 m2',
            
        ],
        [
            'image' => 'Iraqal-Amir.png', 
            'land_type' => 'Agricultural Land',
            'price' => '40000 Jd',
            'governorate' => 'Amman',
            'district' => 'Iraq al-Amir',
            'area' => '5000 m2',
          
        ],
        [
            'image' => 'Sweileh.webp', 
            'land_type' => 'Agricultural Land',
            'price' => '275000 Jd',
            'governorate' => 'Amman',
            'district' => 'Sweileh',
            'area' => '959 m2',
            'description' => '
            In a neighborhood, you can find various essential facilities conveniently located. These include a restaurant, school, supermarket, mall/shopping center, gym, hospital, mosque, dry cleaner, parking lot, bank/ATM, and pharmacy.',
            'additional_information' =>'
            Land for sale in Sweileh, Arqoub Khalda, 959 square meters, in a residential area, residential classification B, with a beautiful view, suitable for investment, and all services are available.'
          
        ],
        [
            'image' => 'King Abdullah Hospital.webp', 
            'land_type' => 'Agricultural Land',
            'price' => '16000 Jd',
            'governorate' => 'Irbid',
            'district' => 'King Abdullah Hospital',
            'area' => '15000 m2',
            'description' => '
            In a nearby vicinity, you can find essential facilities such as a hospital, pharmacy, mosque, school, restaurant, supermarket, mall/shopping center, bank/ATM, dry cleaner, parking lot, and a gym.',
            'additional_information' =>'
            Land for Sale - Unique Location - Irbid - Ramtha - Near Friday Market and Irbid Trucks City
            
            A distinctive location close to the Ramtha-Irbid road.
            
            Land Area: 15 Dunums
            
            Frontage on the street: 300 meters
            
            Services, roads, and water wells for selling water are available in the vicinity. Commercial and agricultural wells are also present.
            
            Price per Dunum: 16,000 Jordanian Dinars'
          
        ],
        [
            'image' => 'University of Science and Technology1.webp', 
            'land_type' => 'Agricultural Land',
            'price' => '33000 Jd',
            'governorate' => 'Irbid',
            'district' => 'University of Science and Technology',
            'area' => '3400 m2',
            'description' => '
            A segregated piece of land is available for sale with an independent title deed at a price of (33,000) Jordanian Dinars for the entire plot.
            
            • Directly from the owner and without intermediaries.
            
            • Parcel number (127) in Al-Musalli Al-Sharqi district.
            
            • Its area is (3400) square meters.
            
            • The parcel is located on a 6-meter street, and the frontage of the parcel is 50 meters.
            
            • The parcel is segregated with an independent title deed.
            
            • The parcel is situated in the governorate of Irbid, east of the University of Science and Technology and east of the Cyber City.
            
            • Prominent landmarks in the area: Jordan University of Science and Technology, Cyber City, and the Central Appraisal Department.',
            'additional_information' =>''
          
        ],
        [
            'image' => 'zabda2.webp', 
            'land_type' => 'Residential Land',
            'price' => '80000 Jd',
            'governorate' => 'Irbid',
            'district' => 'Zabda',
            'area' => '787 m2',
            'description' => '
            Residential land for sale in Irbid City

            Zubdat Furkouh

            East of the Western Police Station in Irbid

            Next to Abu Al-Rab Building

            Sareej Area

            The neighborhood follows a panel system

            Plot number: 778

            Plot area: 787 square meters

            Price per square meter: 100 Jordanian Dinars',
            'additional_information' =>''
          
        ],
        [
            'image' => 'husun.webp', 
            'land_type' => 'Agricultural Land',
            'price' => '86240 Jd',
            'governorate' => 'Irbid',
            'district' => 'Al-Husun',
            'area' => '4312 m2',
            'description' => '
            Location: Land for Sale, Al-Moumenia District, Al-Hisn
            
            Total Area: 4312 square meters
            
            Piece Dimensions and Frontages:
            
            56 meters Northern Frontage – 6 meters Street
            Available at a rate of 20 dinars per square meter.',
            'additional_information' =>''
          
        ],
        [
            'image' => 'Idon Military Hospital1.webp', 
            'land_type' => 'Residential Land',
            'price' => '153600 Jd',
            'governorate' => 'Irbid',
            'district' => 'Idon Military Hospital',
            'area' => '960 m2',
            'description' => '
            
            Two land plots in the most prestigious and beautiful areas of Irbid-Edon.

            Al-Khargha Basin, zoning (A) special.

            Each plot has an area of 960 square meters.

            Located east of Edon Hospital and west of the Irbid-Amman highway.

            Just one street away from the Irbid Youth Hostel and the Irbid Cultural Center.

            Situated in a quiet and distinctive area with villas and palaces.

            Price per square meter is 160.',
            'additional_information' =>'
            Nearby locations:
            
            Supermarket
            School
            Hospital
            Mosque
            Parking lot
            Pharmacy
            Restaurant'
          
        ],
        [
            'image' => 'Al-Tanaib1.webp', 
            'land_type' => 'Residential Land',
            'price' => '88000 Jd',
            'governorate' => 'Amman',
            'district' => 'Al-Tanaib',
            'area' => '610 m2',
            'description' => '
            For sale at a special price, a land plot near Israa University, close to the Airport Street and Mecca Street in Attanib, Basin 4, Al-Ayadat. The plot size is 610 square meters, with frontage on two streets (12 meters each). It offers a magnificent view of Amman and the Airport Street in a villa and modern construction area.

            Services are connected, and it has an independent cadastral survey (title deed).',
            'additional_information' =>'
            Nearby locations:
            Restaurant
            School
            Supermarket
            Gym / Fitness center
            Mall / Shopping center
            Mosque
            Dry cleaner
            Bank / ATM
            Parking lot
            Pharmacy'
          
        ],
     
        [
            'image' => 'White mountain1.webp', 
            'land_type' => 'Commercial Land',
            'price' => '140000 Jd',
            'governorate' => 'Zarqa',
            'district' => 'White mountain',
            'area' => '1010 m2',
            'description' => '
            Commercial land for sale, with a longitudinal area of 1014 square meters in Al-Zarqa, Al-Jabal Al-Abyad. It is located on the main street, next to the pharmacy and opposite the comprehensive school. The rent per unit after construction ranges from 250 to 400 Jordanian Dinars.',
            'additional_information' =>'
            Nearby locations:
            Restaurant
            School
            Supermarket
            Pharmacy'
          
        ],
        [
            'image' => 'kamsha1.webp', 
            'land_type' => 'Residential Land',
            'price' => '36630 Jd',
            'governorate' => 'Zarqa',
            'district' => 'Al-Kamsha',
            'area' => '823 m2',
            'description' => '
            Commercial land for sale, with a longitudinal area of 1014 square meters in Al-Zarqa, Al-Jabal Al-Abyad. It is located on the main street, next to the pharmacy and opposite the comprehensive school. The rent per unit after construction ranges from 250 to 400 Jordanian Dinars.',
            'additional_information' =>'
            Nearby locations:
            Restaurant
            School
            Supermarket
            Pharmacy'
          
        ],
       
    ];


    foreach ($landcards as $landcard) {
        LandCard::create($landcard);
    }
    }
} 
