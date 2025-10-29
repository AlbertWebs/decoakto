<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThicknessesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('thicknesses')->delete();
        
        \DB::table('thicknesses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => '1',
                'title' => '7mm',
                'image' => 'gret.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => '1',
                'title' => '8mm',
                'image' => 'gret.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => '1',
                'title' => '10mm',
                'image' => 'gret.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => '1',
                'title' => '12mm',
                'image' => 'gret.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => '1',
                'title' => '14mm',
                'image' => 'gret.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => '1',
                'title' => '16mm',
                'image' => 'gret.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}