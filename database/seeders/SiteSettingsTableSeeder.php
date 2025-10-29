<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('_site_settings')->delete();
        
        \DB::table('_site_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sitename' => 'Decomagna ltd',
                'logo' => 'decomagna Logos Trans-14.png',
                'logo_footer' => 'decomagna Logos Trans-16.png',
                'logo_two' => 'decomagna Logos Trans-14.png',
                'favicon' => 'favicon.png',
                'email' => 'info@decomagna.com',
                'email_one' => 'info@decomagna.com',
                'mobile_one' => '+2547796 110511',
                'mobile_two' => '+2547796 110511',
                'mpesa' => NULL,
                'paypal' => NULL,
                'tagline' => NULL,
                'url' => 'https://www.decomagna.com',
                'location' => NULL,
                'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.645113886492!2d36.7433605!3d-1.3798952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f05afa2b62b47%3A0xe62322a0792f128b!2sQuick-Step%20flooring%20Kenya%20-%20Decomagna%20ltd!5e0!3m2!1sen!2ske!4v1686564367873!5m2!1sen!2ske',
                'address' => NULL,
                'facebook' => 'https://web.facebook.com/decomagnaDev/',
                'whatsapp' => '0796 110511
',
                'telegram' => '0796 110511
',
                'twitter' => 'https://twitter.com/DecomagnaKenya',
                'linkedin' => 'https://www.linkedin.com/company/decomagnakenya/',
                'instagram' => 'https://www.instagram.com/decomagna_kenya/',
                'youtube' => NULL,
                'google' => NULL,
                'risks' => '<p>"Quick-Step® original flooring solutions made in Belgium | lifetime warranty | affordable prices | extreme durability. Official distributors in KENYA and East-Africa. Up to lifetime warranty, water-proof and scratch proof floors. Discover redefined elegance, discover a lifetime of pleasure, from the biggest flooring manufacturer in the world. Quick-Step®. We provide installation services for all our products. Laminate Flooring | Engineered Wood | Vinyl flooring | Mkeka vinyl sheets"</p>',
                'welcome' => '<p>"Quick-Step® original flooring solutions made in Belgium | lifetime warranty | affordable prices | extreme durability. Official distributors in KENYA and East-Africa. Up to lifetime warranty, water-proof and scratch proof floors. Discover redefined elegance, discover a lifetime of pleasure, from the biggest flooring manufacturer in the world. Quick-Step®. We provide installation services for all our products. Laminate Flooring | Engineered Wood | Vinyl flooring | Mkeka vinyl sheets"</p>
',
                'tawkTo' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
                'tawkToStatus' => 1,
                'whatsAppStatus' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}