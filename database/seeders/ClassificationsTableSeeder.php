<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('classifications')->delete();
        
        \DB::table('classifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Impressive',
                'slung' => 'impressive',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Classic',
                'slung' => 'classic',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Creo',
                'slung' => 'creo',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Loc-floors',
                'slung' => 'loc-floors',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Endurance',
                'slung' => 'endurance',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}