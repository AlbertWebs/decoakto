<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'link_name' => NULL,
                'title' => 'Quick-Step Classic| A fully waterproof flooring at an affordable price',
                'size' => NULL,
                'content' => '<p>This collection is brilliantly varied, and its tones and hues range from white planks right through to deep chocolate colours, reflecting an assortment of wood designs. It perfectly imitates real-wood flooring for an authentic look. A high-resolution photo of the type of wood that the floor is replicating is reproduced onto a fiberboard backing and covered with a scratch-resistant coating to create the look and feel of authentic wood.</p>

<p>As the Quick-Step Classic range contains a moisture-resistant technology, it is waterproof. As long as you wipe up any little spills or accidents in good time, it will continue to look as good as the day it was laid.</p>

<p>Because of the patented technologies, the classic range is suitable for living spaces. You can rest assured that it will continue to look good even in high traffic areas of the home such as hallways. All the Quickstep range is suitable for use with under-floor heating too.</p>

<p>The Quick-Step Classic range is waterproof. Therefore, they&#39;re ideal for rooms like kitchens or bathrooms</p>',
                'link' => NULL,
                'section' => 'home_proffesional',
                'image' => 'file.php.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'link_name' => 'Shop Now',
                'title' => 'About Us',
                'size' => '425by680',
                'content' => 'Be The First To Grab This',
                'link' => 'http://localhost:8000/products/women',
                'section' => 'home_first',
                'image' => 'amboseli.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}