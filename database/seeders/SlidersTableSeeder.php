<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'action' => 'https://www.decomagna.com/blog/',
                'name' => 'Premium Flooring Solutions - Quick-Step® - Made in Belgium',
                'content' => '<p>Elevate Your Space with Premium Floors! We offer a wide variety of premium floors from Belgium, including Impressive, Classic, Creo, LOC- Floors, and Endurance Laminates. Our skilled team ensures flawless installations, guaranteeing that your flooring and joinery are perfectly fitted and finished to the highest standards. With our diverse selection, clients can choose the perfect flooring solution to enhance their space with elegance and durability. Experience the luxury and quality of our premium floors, transforming your environment into a true masterpiece.</p>',
                'action_name' => 'Discover More',
                'thumbnail' => 'download.webp',
                'image' => 'lucaslb4._wide_angle_view_of_modern_open-plan_kitchen_and_livin_02134d5b-387b-433e-969d-73e80f52b0cb.png',
                'created_at' => '2023-06-12 09:17:25',
                'updated_at' => '2023-06-12 09:17:25',
            ),
            1 => 
            array (
                'id' => 2,
                'action' => 'https://decomagna.com/product-category/laminate/',
                'name' => 'Original Quick-step Laminate Flooring',
                'content' => '<p>MADE IN BELGIUM</p>

<p>Quick&nbsp;Step laminate flooring is all about the technology that makes the laminate wood floors so durable as the style that makes them so distinctive. From the revolutionary locking system that helps prevent water damage to our ScratchGuard&trade; Advanced Finish Protection that defends against everyday wear. With Quick&nbsp;Step laminate flooring, you can create a truly extraordinary room and fully enjoy it.<br />
<br />
Innovation is what makes Quick Step Laminate such great products, from the V-Groove system, to the exclusive &quot;click to install&quot; system which offers 3 easy ways of assembling the laminate floor. Quick Step laminate also offers an innovative range (the Impressive range) that has great water and moist resistance, which is designed for bathroom use</p>',
                'action_name' => 'Our Laminate collections',
                'thumbnail' => 'download.webp',
                'image' => 'lucaslb4._Low-angle_wide_shot_from_floor_level_in_a_modern_Nair_1fbffb48-f628-4d33-b2e4-1de25c3f9d42.png',
                'created_at' => '2023-06-12 09:39:23',
                'updated_at' => '2023-06-12 09:39:23',
            ),
            2 => 
            array (
                'id' => 3,
                'action' => NULL,
                'name' => 'Flooring surveys & measurements',
                'content' => '<p>Flooring Surveys &amp; Measurements: For site surveys, we charge Ksh 2000 within Nairobi. Outside Nairobi, we will calculate transport charges, which are deductible after purchase.</p>

<p>This fee ensures accurate measurements and personalized service tailored to your needs. We look forward to assisting you in making informed decisions for your project.</p>',
                'action_name' => NULL,
                'thumbnail' => 'download.webp',
                'image' => 'ChatGPT Image Sep 4, 2025, 03_15_15 PM.png',
                'created_at' => '2023-06-12 09:43:06',
                'updated_at' => '2023-06-12 09:43:06',
            ),
            3 => 
            array (
                'id' => 4,
                'action' => NULL,
                'name' => 'Live, Breathe, Love Flooring. We do..',
                'content' => '<p>Live, Breathe, Love Flooring. We do. At Decomagna, we&#39;re passionate about bringing life and character to your spaces through exceptional flooring solutions. With a dedication to quality and craftsmanship, we ensure that every step you take is on a floor you&#39;ll love. Experience the difference with us.</p>',
                'action_name' => NULL,
                'thumbnail' => 'download.webp',
                'image' => 'slider-1.webp',
                'created_at' => '2023-06-12 09:45:06',
                'updated_at' => '2023-06-12 09:45:06',
            ),
            4 => 
            array (
                'id' => 5,
                'action' => NULL,
                'name' => 'Sit back and relax, we install for you',
                'content' => '<p>At Decomagna, we are dedicated to providing exceptional installation services to complement our premium products. With a trained team boasting over 8 years of experience in flooring installation and joinery work, we ensure that every project is executed with precision and expertise. Our skilled professionals bring their extensive knowledge and attention to detail to deliver flawless installations, guaranteeing that your flooring and joinery are perfectly fitted and finished to the highest standards. Trust Decomagna&#39;s commitment to excellence for all your installation needs.</p>',
                'action_name' => NULL,
                'thumbnail' => 'download.webp',
                'image' => 'download-slider-5.webp',
                'created_at' => '2023-06-12 09:46:23',
                'updated_at' => '2023-06-12 09:46:23',
            ),
            5 => 
            array (
                'id' => 6,
                'action' => NULL,
                'name' => 'Quick-Step® Original Flooring',
                'content' => '<p>Explore Quick-Step&reg; Original Flooring in Kenya with Decomagna Ltd. From stylish laminates to durable engineered wood, our premium flooring solutions bring beauty, quality, and lasting performance to every project</p>',
                'action_name' => NULL,
                'thumbnail' => 'download.webp',
                'image' => 'stairscloseup.png',
                'created_at' => '2023-06-12 09:47:32',
                'updated_at' => '2023-06-12 09:47:32',
            ),
            6 => 
            array (
                'id' => 7,
                'action' => 'https://decomagna.com/brochure',
                'name' => 'State Of The Art Features & Technologies',
                'content' => '<p>DISCOVER WHAT MAKES QUICK-STEP SO GOOD</p>',
                'action_name' => 'VIEW CATALOGS',
                'thumbnail' => 'download.webp',
                'image' => 'Screenshot 2025-08-14 095536.png',
                'created_at' => '2023-06-12 09:49:56',
                'updated_at' => '2023-06-12 09:49:56',
            ),
            7 => 
            array (
                'id' => 8,
                'action' => NULL,
                'name' => 'Technical support and after-sales services, Kenya',
                'content' => '<p>Professional &amp; efficient tech-support</p>
<quillbot-extension-portal></quillbot-extension-portal>',
                'action_name' => NULL,
                'thumbnail' => 'download.webp',
                'image' => 'download-slider-8.webp',
                'created_at' => '2023-06-12 09:53:21',
                'updated_at' => '2023-06-12 09:53:21',
            ),
        ));
        
        
    }
}