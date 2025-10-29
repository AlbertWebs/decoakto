<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_reset_tokens')->delete();
        
        \DB::table('password_reset_tokens')->insert(array (
            0 => 
            array (
                'email' => 'testing@example.com',
                'token' => '$2y$10$4qYXmZY/E5i9lD5XicDSHu1zVIQ6HeiflGc89Ew.2K8gl/e.rQYue',
                'created_at' => '2024-06-23 13:24:11',
            ),
        ));
        
        
    }
}