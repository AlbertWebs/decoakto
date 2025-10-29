<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('terms')->delete();
        
        \DB::table('terms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Introduction',
                'content' => '<p>This is an introduction to terms and conditions</p>',
                'created_at' => '2021-05-15 08:01:29',
                'updated_at' => '2021-05-15 08:01:29',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '!st Terms and Condition',
                'content' => '<p>Test Terms and Conditions</p>',
                'created_at' => '2021-05-15 08:02:30',
                'updated_at' => '2021-05-15 08:02:30',
            ),
        ));
        
        
    }
}