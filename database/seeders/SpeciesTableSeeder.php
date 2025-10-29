<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpeciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('species')->delete();
        
        \DB::table('species')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => '1',
                'title' => 'Acacia',
                'image' => 'w1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => '1',
                'title' => 'Cherry',
                'image' => 'w2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => '1',
                'title' => 'Eucalyptus',
                'image' => 'w3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => '1',
                'title' => 'Hickory',
                'image' => 'w10.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => '1',
                'title' => 'Mahogany',
                'image' => 'w7.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => '1',
                'title' => 'Murple',
                'image' => 'w6.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}