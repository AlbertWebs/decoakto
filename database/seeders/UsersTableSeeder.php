<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@decomagna.com',
                'image' => '199259143_4389625377747506_3043984032264076715_n.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$12$6QpPnJwx2hB7KlakRR9hku.ItG8N/EBisjcgBNJrnUENS/Fec3SMy',
                'is_admin' => 1,
                'country' => NULL,
                'status' => 1,
                'address' => 'albertmuhatia@gmail.com',
                'mobile' => '0723014032',
                'type' => 1,
                'remember_token' => 'TNM0JMKnwwfkyBc2xDbs06CmqeEt9YacQiW4DqcgpdHZJPlBkZiQYgGwfvbr',
                'created_at' => '2023-06-09 06:36:51',
                'updated_at' => '2025-07-31 17:31:10',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Paul-Lucas Lambert',
                'email' => 'llambert@decomanga.com',
                'image' => 'lordship_africa_entrance_to_dining_room.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$12$TUTosMRbKSFrwSzCQqlsGu6C7M1w36kHNd5bM/KhIzykRipAuAXTW',
                'is_admin' => 1,
                'country' => 'Kenya',
                'status' => 1,
                'address' => '15174-00509',
                'mobile' => '0728787432',
                'type' => 0,
                'remember_token' => NULL,
                'created_at' => '2025-10-07 20:04:52',
                'updated_at' => '2025-10-07 20:04:52',
            ),
        ));
        
        
    }
}