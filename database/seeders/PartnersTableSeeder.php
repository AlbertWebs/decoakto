<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partners')->delete();
        
        \DB::table('partners')->insert(array (
            0 => 
            array (
                'id' => 10,
                'name' => 'Tilisi Developments',
                'slung' => 'tilisi-developments',
                'image' => 'tilisi_logo.png',
                'created_at' => '2023-07-08 18:13:25',
                'updated_at' => '2023-07-08 18:13:25',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'Embassy of the United States of America, Nairobi',
                'slung' => 'embassy-of-the-united-states-of-america-nairobi',
                'image' => 'US-embassy.jpg',
                'created_at' => '2023-07-08 18:17:19',
                'updated_at' => '2023-07-08 18:17:19',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'American Chamber of Commerce',
                'slung' => 'american-chamber-of-commerce',
                'image' => 'american_chamber_of_commerce.jpeg',
                'created_at' => '2023-07-08 18:18:02',
                'updated_at' => '2023-07-08 18:18:02',
            ),
            3 => 
            array (
                'id' => 13,
                'name' => 'UN Habitat',
                'slung' => 'un-habitat',
                'image' => '11122018_un-habitat-logo.png',
                'created_at' => '2023-07-08 18:18:21',
                'updated_at' => '2023-07-08 18:18:21',
            ),
            4 => 
            array (
                'id' => 14,
                'name' => 'Boma International Hospitality College',
                'slung' => 'boma-international-hospitality-college',
                'image' => 'BIHC.png',
                'created_at' => '2023-07-08 18:18:51',
                'updated_at' => '2023-07-08 18:18:51',
            ),
            5 => 
            array (
                'id' => 15,
                'name' => 'Embassy of Slovakia, Nairobi',
                'slung' => 'embassy-of-slovakia-nairobi',
                'image' => 'slovakia emabassy.png',
                'created_at' => '2023-07-08 18:19:41',
                'updated_at' => '2023-07-08 18:19:41',
            ),
            6 => 
            array (
                'id' => 16,
                'name' => 'Zetech University',
                'slung' => 'zetech-university',
                'image' => '10984219_10154030251644148_7447519062396887288_n-3.png',
                'created_at' => '2023-07-08 18:20:29',
                'updated_at' => '2023-07-08 18:20:29',
            ),
            7 => 
            array (
                'id' => 17,
                'name' => 'Karen Country Club',
                'slung' => 'karen-country-club',
                'image' => 'karen-country-club.png',
                'created_at' => '2023-07-08 18:20:48',
                'updated_at' => '2023-07-08 18:20:48',
            ),
            8 => 
            array (
                'id' => 18,
                'name' => 'Palacina Interiors',
                'slung' => 'palacina-interiors',
                'image' => 'palacina_interiors.png',
                'created_at' => '2023-07-08 18:21:08',
                'updated_at' => '2023-07-08 18:21:08',
            ),
            9 => 
            array (
                'id' => 19,
                'name' => 'Attibassi Kenya',
                'slung' => 'attibassi-kenya',
                'image' => 'attibassi.png',
                'created_at' => '2023-07-08 18:21:23',
                'updated_at' => '2023-07-08 18:21:23',
            ),
            10 => 
            array (
                'id' => 20,
                'name' => 'AZ Studio Kenya',
                'slung' => 'az-studio-kenya',
                'image' => 'AZ-Studio-Kenya.png',
                'created_at' => '2023-07-08 18:21:42',
                'updated_at' => '2023-07-08 18:21:42',
            ),
            11 => 
            array (
                'id' => 21,
                'name' => 'Al-Hatim Decor',
                'slung' => 'al-hatim-decor',
                'image' => 'al-hatim.png',
                'created_at' => '2023-07-08 18:22:06',
                'updated_at' => '2023-07-08 18:22:06',
            ),
            12 => 
            array (
                'id' => 22,
                'name' => 'Amber Clinic',
                'slung' => 'amber-clinic',
                'image' => 'Artboard-9.png',
                'created_at' => '2023-07-08 18:22:26',
                'updated_at' => '2023-07-08 18:22:26',
            ),
            13 => 
            array (
                'id' => 23,
                'name' => 'Comply',
                'slung' => 'comply',
                'image' => 'comply.jpeg',
                'created_at' => '2023-07-08 18:23:05',
                'updated_at' => '2023-07-08 18:23:05',
            ),
            14 => 
            array (
                'id' => 24,
                'name' => 'Governors Camp, Masai Mara',
                'slung' => 'governors-camp-masai-mara',
                'image' => 'governors-camp.jpg',
                'created_at' => '2023-07-08 18:24:00',
                'updated_at' => '2023-07-08 18:24:00',
            ),
            15 => 
            array (
                'id' => 25,
                'name' => 'Kicheche, Laikipia',
                'slung' => 'kicheche-laikipia',
                'image' => 'kicheche.jpeg',
                'created_at' => '2023-07-08 18:24:19',
                'updated_at' => '2023-07-08 18:24:19',
            ),
            16 => 
            array (
                'id' => 26,
                'name' => 'Eunique Fashions, Sarit Center',
                'slung' => 'eunique-fashions-sarit-center',
                'image' => 'Eunique_Fashions_Africa.jpg',
                'created_at' => '2023-07-08 18:24:47',
                'updated_at' => '2023-07-08 18:24:47',
            ),
            17 => 
            array (
                'id' => 27,
                'name' => 'DOJO Gym, Karen',
                'slung' => 'dojo-gym-karen',
                'image' => 'dojo.png',
                'created_at' => '2023-07-08 18:25:15',
                'updated_at' => '2023-07-08 18:25:15',
            ),
            18 => 
            array (
                'id' => 28,
                'name' => 'Kikoy, The Hub karen',
                'slung' => 'kikoy-the-hub-karen',
                'image' => 'kikoy.png',
                'created_at' => '2023-07-08 18:25:52',
                'updated_at' => '2023-07-08 18:25:52',
            ),
            19 => 
            array (
                'id' => 29,
                'name' => '88 Nairobi, Lordship Africa',
                'slung' => '88-nairobi-lordship-africa',
                'image' => 'lordship.png',
                'created_at' => '2023-07-08 18:26:19',
                'updated_at' => '2023-07-08 18:26:19',
            ),
            20 => 
            array (
                'id' => 30,
                'name' => 'French School Nairobi, LDD',
                'slung' => 'french-school-nairobi-ldd',
                'image' => 'lyceeDenisDiderot.jpeg',
                'created_at' => '2023-07-08 18:26:40',
                'updated_at' => '2023-07-08 18:26:40',
            ),
            21 => 
            array (
                'id' => 31,
                'name' => 'Mugs & Brews Lounge, Kilimani',
                'slung' => 'mugs-brews-lounge-kilimani',
                'image' => 'mugz&brewz.png',
                'created_at' => '2023-07-08 18:27:06',
                'updated_at' => '2023-07-08 18:27:06',
            ),
            22 => 
            array (
                'id' => 32,
                'name' => 'Novo Nordisk, Nairobi',
                'slung' => 'novo-nordisk-nairobi',
                'image' => 'novo_Nordisk.svg.png',
                'created_at' => '2023-07-08 18:27:21',
                'updated_at' => '2023-07-08 18:27:21',
            ),
            23 => 
            array (
                'id' => 33,
                'name' => 'Rift Valley Leather, Karen',
                'slung' => 'rift-valley-leather-karen',
                'image' => 'rift_valley_leather-riftvalley-Kenya-Flooring-east-africa.png',
                'created_at' => '2023-07-08 18:27:41',
                'updated_at' => '2023-07-08 18:27:41',
            ),
            24 => 
            array (
                'id' => 34,
                'name' => 'StoneHenge Design Studio, Westlands',
                'slung' => 'stonehenge-design-studio-westlands',
                'image' => 'stonehenge-keny.jpeg',
                'created_at' => '2023-07-08 18:28:04',
                'updated_at' => '2023-07-08 18:28:04',
            ),
            25 => 
            array (
                'id' => 35,
                'name' => 'Ziwa Bush Lodge',
                'slung' => 'ziwa-bush-lodge',
                'image' => 'ziwa-lodge.png',
                'created_at' => '2023-07-08 18:28:29',
                'updated_at' => '2023-07-08 18:28:29',
            ),
            26 => 
            array (
                'id' => 36,
                'name' => 'Wadi Degla Clubs, Kiambu',
                'slung' => 'wadi-degla-clubs-kiambu',
                'image' => 'wadi-degla.jpeg',
                'created_at' => '2023-07-08 18:28:47',
                'updated_at' => '2023-07-08 18:28:47',
            ),
            27 => 
            array (
                'id' => 42,
                'name' => 'Co-operative Bank of Kenya',
                'slung' => 'co-operative-bank-of-kenya',
                'image' => 'download.png',
                'created_at' => '2025-08-21 20:20:37',
                'updated_at' => '2025-08-21 20:20:37',
            ),
            28 => 
            array (
                'id' => 43,
                'name' => 'Krones Center East Africa Ltd.',
                'slung' => 'krones-center-east-africa-ltd',
                'image' => 'krones.png',
                'created_at' => '2025-08-21 20:21:33',
                'updated_at' => '2025-08-21 20:21:33',
            ),
        ));
        
        
    }
}