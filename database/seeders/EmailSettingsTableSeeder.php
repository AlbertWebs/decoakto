<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmailSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_settings')->delete();
        
        
        
    }
}