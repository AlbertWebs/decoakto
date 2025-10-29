<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq')->delete();
        
        \DB::table('faq')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'What is Laminate Flooring Made of?',
                'slung' => NULL,
                'category' => NULL,
                'meta' => NULL,
                'content' => 'Laminate is often referred to as a “hybrid” floor because of its high-density fiberboard
(HDF) core topped with an image layer and wear layer.
<strong>Wear layer:</strong> Wear layers are commonly waterproof, protect the floor from scratches
and stains, and provide a realistic feel. Wear layers can include rougher, more
natural-looking scrapes and knots.
<strong>Image layer:</strong> This holds the pattern or print, making the laminate look like real
hardwood and stone.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'What Are the Advantages of Laminate Flooring?',
                'slung' => NULL,
                'category' => NULL,
                'meta' => NULL,
                'content' => '<ul>
<li>Scratch resistance</li>
<li>DIY installation</li>
<li>Easy to clean</li>
<li>Realistic feel</li>
</ul>',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'What Does the AC Rating for Laminate Flooring Mean?',
                'slung' => NULL,
                'category' => NULL,
                'meta' => NULL,
            'content' => '<p>The Abrasion Class (AC) rating determines how much traffic your laminate flooring can</p>
<p>handle. To find the best laminate option for areas around your home or business; follow the</p>
<p>ratings below:</p>
<p>● AC1: Sufficient for bedrooms and closets.</p>
<p>● AC2: Perfect for family rooms, living rooms, and dining rooms.</p>
<p>● AC3: Great for high-traffic residential spaces and light commercial use.</p>
<p>● AC4: Fantastic for residential spaces and commercial areas with medium foot traffic</p>
<p>● AC5: The best option for heavy commercial applications.</p>',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'How Long Does Laminate Flooring Last?',
                'slung' => NULL,
                'category' => NULL,
                'meta' => NULL,
                'content' => '<strong>Most of our laminate floors come backed with an extensive warranty ranging from five
years to a lifetime guarantee.</strong> With proper care, your laminate can look beautiful in your
home for years of enjoyment. We offer 15 -20 years of warranty',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Where Can I Install Laminate Flooring?',
                'slung' => NULL,
                'category' => NULL,
                'meta' => NULL,
                'content' => '<strong>You can install laminate above and below grade and practically anywhere in the home.</strong>
We recommend waterproof laminate for high moisture areas, like the kitchen and bathroom,
and suggest that you clean up any water or spills right away',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'How Do You Clean Laminate Flooring?',
                'slung' => NULL,
                'category' => NULL,
                'meta' => NULL,
                'content' => 'For weekly maintenance, sweep your floors with a soft-bristle broom to clean off dust, debris,
and leftover crumbs.
Damp-mop your laminate with a liquid cleaning solution specifically formulated for it. <strong>Use a
damp microfiber mop or another absorbent mop that will prevent too much water from
getting on your laminate.</strong>',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}