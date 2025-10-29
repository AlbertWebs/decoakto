<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Atlas Educational Centers',
                'email' => 'atlaseducationalcentre@gmail.com',
                'mobile' => '+254741363089',
                'location' => '7th Floor, Al Habib Building, 4th Street',
            'logo' => 'atlascollege-logo (1).jpg',
                'created_at' => '2022-05-11 06:06:24',
                'updated_at' => '2022-05-11 06:06:24',
            ),
        ));
        
        
    }
}