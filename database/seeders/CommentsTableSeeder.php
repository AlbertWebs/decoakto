<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Kirimi',
                'status' => 1,
                'post_id' => 1,
                'email' => 'kirimijg@gmail.com',
                'content' => 'This is a sample comment',
                'created_at' => '2021-05-14 11:55:24',
                'updated_at' => '2021-05-14 11:55:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Albert  Muhatia',
                'status' => 1,
                'post_id' => 1,
                'email' => 'nektatech@gmail.com',
                'content' => 'Another Comment',
                'created_at' => '2021-05-14 11:58:01',
                'updated_at' => '2021-05-14 11:58:01',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Albert  Muhatia',
                'status' => 0,
                'post_id' => 1,
                'email' => 'nektatech@gmail.com',
                'content' => 'This is a sample',
                'created_at' => '2021-05-14 11:58:58',
                'updated_at' => '2021-05-14 11:58:58',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Albert  Muhatia',
                'status' => 0,
                'post_id' => 1,
                'email' => 'nektatech@gmail.com',
                'content' => 'asas',
                'created_at' => '2021-05-14 11:59:56',
                'updated_at' => '2021-05-14 11:59:56',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Albert  Muhatia',
                'status' => 0,
                'post_id' => 1,
                'email' => 'nektatech@gmail.com',
                'content' => 'aaa',
                'created_at' => '2021-05-14 12:00:25',
                'updated_at' => '2021-05-14 12:00:25',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Albert  Muhatia',
                'status' => 0,
                'post_id' => 1,
                'email' => 'nektatech@gmail.com',
                'content' => 'aaa',
                'created_at' => '2021-05-14 12:00:29',
                'updated_at' => '2021-05-14 12:00:29',
            ),
        ));
        
        
    }
}