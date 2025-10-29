<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'info@designekta.com',
                'product_id' => '1',
                'content' => 'Sample Review Here',
                'rating' => '5',
                'created_at' => '2021-05-15 13:35:53',
                'updated_at' => '2021-05-15 13:35:53',
            ),
        ));
        
        
    }
}