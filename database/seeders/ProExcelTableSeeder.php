<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProExcelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('_pro_excel')->delete();
        
        \DB::table('_pro_excel')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'WEN-83699750',
                'title' => 'Wendo Fuschia Limited Edition',
                'description' => 'Our most beautiful ‘Wendo’ tote bag is back in this lovely Fucshia color but a limited edition product. When we launched the ‘wendo’ translates to ‘love’ in english, was to create a proud Kenyan/ African brand that celebrates a legacy of Love.',
                'availability' => 'In Stock',
                'condition' => 'new',
                'price' => '16500 KES',
                'link' => 'https://aste.co.ke/product/wendo-fuschia-limited-edition',
                'image_link' => 'https://aste.co.ke/public/uploads/products/wendo-fuschia-2-600x800.jpg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:11',
                'updated_at' => '2022-10-08 04:54:11',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'NZI-35647101',
                'title' => 'Nzinga Dome Bag',
            'description' => 'Introducing our all new NZINGA DOME BAG stylish, functional and cut from Kenya’s purest leather. Fits your everyday use for work and play. The Design is  inspired by Queen Ana Nzinga Mbande ,Queen of the Ambundu Kingdoms of Ndongo (1624–1663) and Matamba (1631–1663).',
                'availability' => NULL,
                'condition' => 'new',
                'price' => '18500 KES',
                'link' => 'https://aste.co.ke/product/nzinga-dome-bag',
                'image_link' => 'https://aste.co.ke/public/uploads/products/nzinga-dome-ladies-bag-2-600x800.jpg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:11',
                'updated_at' => '2022-10-08 04:54:11',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'MAL-42807345',
                'title' => 'Malkia laptop bag',
                'description' => 'Our Malkia laptop bag for our Queens is out now! Fits the 13″, 14″ &  15.6” laptops with enough space for all your personal and  office stuff. Our NEW LADIES MALKIA LAPTOP bag comes in an  amazing midnight sky mix with mocha print  and royal blue grain pure leather.  This is a statement of Africa finesse and luxury all in an art and form. Made in Kenya to the world.',
                'availability' => NULL,
                'condition' => 'new',
                'price' => '22504 KES',
                'link' => 'https://aste.co.ke/product/malkia-laptop-bag',
                'image_link' => 'https://aste.co.ke/public/uploads/products/malkia-laptop-handbag-4-600x800.jpg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:11',
                'updated_at' => '2022-10-08 04:54:11',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'KIF-09064157',
                'title' => 'Kifaru Travel suitcase',
                'description' => 'The Kifaru suitcase travel bag is made from genuine leather and built to last! With loads of space on the inside for your travels. It’s been designed to be air cabin ready, easy to wheel around in airports and stylish enough to turn heads.',
                'availability' => 'In Stock',
                'condition' => 'new',
                'price' => '32500 KES',
                'link' => 'https://aste.co.ke/product/kifaru-travel-suitcase',
            'image_link' => 'https://aste.co.ke/public/uploads/products/kifari16K5A9827-copy-600x800 (1).jpg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:11',
                'updated_at' => '2022-10-08 04:54:11',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'MAL-14538753',
                'title' => 'Malkia Handbag 2022',
            'description' => 'The Malkia  (Queen) is an elegant handbag for the Neo-African corporate woman! We have made sure that the fusion between our heritage and culture comes out very potently to make this bag modern, practical and to fit in to your corporate lifestyle.',
                'availability' => NULL,
                'condition' => 'new',
                'price' => '18500 KES',
                'link' => 'https://aste.co.ke/product/malkia-handbag-2022',
                'image_link' => 'https://aste.co.ke/public/uploads/products/malkia-malbec-wine-by-jokajok-2-600x800.jpg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:11',
                'updated_at' => '2022-10-08 04:54:11',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '‘MA-85567600',
                'title' => '‘MAINEST’ Satchel',
                'description' => 'Introducing our new SATCHEL aka the ‘MAINEST’ Satchel. Made from genuine Kenyan leather. Its great for your laptop bag, cables a book and a couple of shirts. It’s great Gift for Father’s Day.',
                'availability' => NULL,
                'condition' => 'new',
                'price' => '20500 KES',
                'link' => 'https://aste.co.ke/product/mainest-satchel',
                'image_link' => 'https://aste.co.ke/public/uploads/products/mainest-satchel-1-600x800.jpg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:12',
                'updated_at' => '2022-10-08 04:54:12',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'TEK-72905306',
                'title' => 'TEKA Ladies Tote Bag',
                'description' => 'Introducing our TEKA LADIES TOTE a pure leather bag made for the classy lady who needs a bag that can fit her laptop 💻 books and work documents.',
                'availability' => NULL,
                'condition' => 'new',
                'price' => '16500 KES',
                'link' => 'https://aste.co.ke/product/teka-ladies-tote-bag',
            'image_link' => 'https://aste.co.ke/public/uploads/products/teka-tote-midnight-sky-2-600x800 (1).jpg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:12',
                'updated_at' => '2022-10-08 04:54:12',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'THA-30039728',
            'title' => 'Thayah Classic Traveler (LE)',
                'description' => 'When it comes iconic travel and an outdoor experience, what matters is simplicity, style and convenience. Meet our Limited Edition Thayah with special vintage leather to give it that classic traveler look.
THIS ITEM IS ONLY AVALIABLE ON PRE ORDER.',
                'availability' => NULL,
                'condition' => 'new',
                'price' => '26500 KES',
                'link' => 'https://aste.co.ke/product/thayah-classic-traveler-le',
                'image_link' => 'https://aste.co.ke/public/uploads/products/thayah-vintage-limited-edition-1-600x800.png',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:12',
                'updated_at' => '2022-10-08 04:54:12',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'URB-44510292',
                'title' => 'Urban Native Backpack',
                'description' => 'Backpacks should look classy and still be functional. Our urban native backpack is Made from pure Kenyan leather and fits your 15” laptop plus other items.',
                'availability' => 'In Stock',
                'condition' => 'new',
                'price' => '19500 KES',
                'link' => 'https://aste.co.ke/product/urban-native-backpack',
                'image_link' => 'https://aste.co.ke/public/uploads/products/urban-native-backpack-3-600x800.jpg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:12',
                'updated_at' => '2022-10-08 04:54:12',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'URB-16951396',
                'title' => 'Urban Flow Leather HandBag',
                'description' => 'Urban Flow Leather HandBag - Pure Hardened Leather',
                'availability' => NULL,
                'condition' => 'new',
                'price' => '18500 KES',
                'link' => 'https://aste.co.ke/product/urban-flow-leather-handbag',
            'image_link' => 'https://aste.co.ke/public/uploads/products/WhatsApp Image 2022-09-10 at 17.47.53(2).jpeg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:12',
                'updated_at' => '2022-10-08 04:54:12',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'URB-89134145',
                'title' => 'Urban Leather Bag 2022',
                'description' => 'Urban Leather Bag 2022',
                'availability' => NULL,
                'condition' => 'new',
                'price' => '22500 KES',
                'link' => 'https://aste.co.ke/product/urban-leather-bag-2022',
                'image_link' => 'https://aste.co.ke/public/uploads/products/WhatsApp Image 2022-09-10 at 17.47.53.jpeg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:12',
                'updated_at' => '2022-10-08 04:54:12',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'AST-87424381',
                'title' => 'Aste Urban Wallet',
                'description' => 'Aste Urban Wallet',
                'availability' => NULL,
                'condition' => 'new',
                'price' => '7500 KES',
                'link' => 'https://aste.co.ke/product/aste-urban-wallet',
                'image_link' => 'https://aste.co.ke/public/uploads/products/wallet.jpeg',
                'brand' => 'Aste',
                'google_product_category' => '6552',
                'created_at' => '2022-10-08 04:54:12',
                'updated_at' => '2022-10-08 04:54:12',
            ),
        ));
        
        
    }
}