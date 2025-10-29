<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Decomagna Ltd: Your Premier Source for Quick-Step Flooring, made in Belgium, and Elora Bespoke Wood Luxury Cabinets',
                'meta' => 'Decomagna Ltd: Your Premier Source for Quick-Step Flooring, made in Belgium, and Elora Bespoke Wood Luxury Cabinets',
                'content' => '<p>Decomagna Ltd, the official distributor of <strong>Quick-Step flooring in Kenya</strong>. We specializing in laminate flooring, engineered wood, and click vinyl, <strong>made in Belgum</strong>. In addition, we proudly present <strong>Elora bespoke wood textile luxury cabinets</strong>, adding a touch of elegance to your space. With <strong>over 8 years of experience</strong>, we bring unrivaled expertise and class to every project. Trust Decomagna for exceptional flooring solutions and luxurious bespoke cabinets, all based in <strong>Kenya.</strong></p>',
                'mission' => NULL,
                'vision' => NULL,
                'values' => NULL,
                'image_one' => 'amazon-s3-og.jpg',
                'image_two' => NULL,
                'image_three' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}