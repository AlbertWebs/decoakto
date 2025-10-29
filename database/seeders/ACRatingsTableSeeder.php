<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ACRatingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('a_c_ratings')->delete();
        
        \DB::table('a_c_ratings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => '1',
                'slung' => 'ac1-a-great-choice-for-home-space-where-is-low-foot-trafficclosetbedroom',
            'title' => 'AC1—A great choice for home space where is low foot traffic(closet&bedroom)',
                'image' => 'ac1.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => '1',
                'slung' => 'ac2-suitable-for-room-with-moderate-foot-trafficdining-room-living-roomfamily-room',
            'title' => 'AC2—Suitable for room with moderate foot traffic(dining room, living room&family room)',
                'image' => '61137977093ec.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => '1',
                'slung' => 'ac3-for-any-room-in-the-home-with-low-or-heavy-traffickitchen-corridorliving-room',
            'title' => 'AC3—For any room in the home with low or heavy traffic(kitchen, corridor&living room) ',
                'image' => '6113798320407.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => '1',
                'slung' => 'ac4-used-for-all-the-residential-and-medium-foot-traffic-commercial-areas',
                'title' => 'AC4—Used for all the residential and medium-foot-traffic commercial areas.',
                'image' => '611491d38a512.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => '1',
                'slung' => 'ac5-can-be-installed-in-commercial-areas-with-busy-foot-traffic',
                'title' => 'AC5—Can be installed in commercial areas with busy foot traffic',
                'image' => '61137992e4296.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => '1',
                'slung' => 'ac6-heavy-intensive-trafficked-areas-like-airport-terminals-and-public-facing-government-buildings',
                'title' => 'AC6—— Heavy intensive trafficked areas like airport terminals and public-facing government buildings.',
                'image' => '618b85745eb0a.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}