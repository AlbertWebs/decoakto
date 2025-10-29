<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrivaciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('privacies')->delete();
        
        \DB::table('privacies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Introduction',
                'content' => '<p>Introduction to privacy policy</p>',
                'created_at' => '2021-05-15 08:05:18',
                'updated_at' => '2021-05-15 08:05:18',
            ),
        ));
        
        
    }
}