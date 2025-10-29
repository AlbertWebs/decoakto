<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExtrasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('extras')->delete();
        
        \DB::table('extras')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => '1',
                'title' => 'Durability And Abrasion Resistance',
                'content' => '<p>Quick-Step&#39;s groundbreaking ScratchGuard technology revolutionizes their laminate flooring by making it an impressive 10 times more resistant to scratches compared to other laminate competitors. This innovative advancement forms a robust protective layer that not only preserves the floor&#39;s aesthetic allure but also extends its lifespan, making Quick-Step laminate flooring the premier choice for enduring beauty and unparalleled durability.</p>',
                'image' => 're.php',
                'created_at' => '2023-07-19 11:20:15',
                'updated_at' => '2023-07-19 11:20:42',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => '1',
                'title' => 'Realistic Wood And Stone Looks:',
                'content' => '<p>Experience the Next Level of Flooring Excellence with Quick-Step: Our Flooring Solutions Combine Impeccable Texture and a Realistic Wood Finish to Transform Your Space into a Haven of Authenticity and Sophistication. Walk upon the Elegance of Nature, Crafted with Precision, and Revel in a Seamless Blend of Aesthetics and Durability that Only Quick-Step can Provide.</p>',
                'image' => 'ultra_realistic_photo_realistic_fingers-texture.png',
                'created_at' => '2023-07-19 11:20:42',
                'updated_at' => '2023-07-19 11:20:42',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => '1',
                'title' => 'Waterproof',
                'content' => '<p>Quick-Step HydroSeal is an advanced hydrophobic coating technology applied to laminate flooring. Hydrophobic coatings are designed to repel water and other liquids, creating a barrier that prevents moisture from seeping into the flooring material. In the context of laminate flooring, Quick-Step&#39;s HydroSeal technology adds an extra layer of protection against water damage, making the flooring more resistant to spills, splashes, and even moisture from humid environments.</p>',
                'image' => 'waterproof.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => '1',
                'title' => 'Health And Safety',
                'content' => '<p>FloorScore testing and certification make the Richwood Flooring free of harmful chemicals that can cause bad indoor air quality and safety problems. FloorScore certification: California has been a leader in indoor air quality initiatives. FloorScore certification indicates that a specific product has been certified for indoor air quality and safety in accordance with California standards. So basically, it meets the highest standards.</p>',
                'image' => 'quick-step-cert-cropped440-550.png',
                'created_at' => '2023-07-19 11:36:24',
                'updated_at' => '2023-07-19 11:36:24',
            ),
            4 => 
            array (
                'id' => 9,
                'category_id' => '3',
                'title' => 'Durability And Abrasion Resistance',
                'content' => '<p>Quick-Step&#39;s groundbreaking ScratchGuard technology revolutionizes their laminate flooring by making it an impressive 10 times more resistant to scratches compared to other laminate competitors. This innovative advancement forms a robust protective layer that not only preserves the floor&#39;s aesthetic allure but also extends its lifespan, making Quick-Step laminate flooring the premier choice for enduring beauty and unparalleled durability.</p>',
                'image' => 'lucasLB4_Masaai_man_with_a_spear_standing_on_laminate_flooring-feet.png',
                'created_at' => '2023-07-19 11:20:15',
                'updated_at' => '2023-07-19 11:20:42',
            ),
            5 => 
            array (
                'id' => 10,
                'category_id' => '3',
                'title' => 'Realistic Wood And Stone Looks:',
                'content' => '<p>Experience the Next Level of Flooring Excellence with Quick-Step: Our Flooring Solutions Combine Impeccable Texture and a Realistic Wood Finish to Transform Your Space into a Haven of Authenticity and Sophistication. Walk upon the Elegance of Nature, Crafted with Precision, and Revel in a Seamless Blend of Aesthetics and Durability that Only Quick-Step can Provide.</p>',
                'image' => 'ultra_realistic_photo_realistic_fingers-texture.png',
                'created_at' => '2023-07-19 11:20:42',
                'updated_at' => '2023-07-19 11:20:42',
            ),
            6 => 
            array (
                'id' => 11,
                'category_id' => '3',
                'title' => 'Waterproof',
                'content' => '<p>Quick-Step HydroSeal is an advanced hydrophobic coating technology applied to laminate flooring. Hydrophobic coatings are designed to repel water and other liquids, creating a barrier that prevents moisture from seeping into the flooring material. In the context of laminate flooring, Quick-Step&#39;s HydroSeal technology adds an extra layer of protection against water damage, making the flooring more resistant to spills, splashes, and even moisture from humid environments.</p>',
                'image' => 'waterproof.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'category_id' => '3',
                'title' => 'Health And Safety',
                'content' => '<p>FloorScore testing and certification make the Richwood Flooring free of harmful chemicals that can cause bad indoor air quality and safety problems. FloorScore certification: California has been a leader in indoor air quality initiatives. FloorScore certification indicates that a specific product has been certified for indoor air quality and safety in accordance with California standards. So basically, it meets the highest standards.</p>',
                'image' => 'quick-step-cert-cropped440-550.png',
                'created_at' => '2023-07-19 11:36:24',
                'updated_at' => '2023-07-19 11:36:24',
            ),
        ));
        
        
    }
}