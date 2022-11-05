<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'posts' => 'aaaの1回目の投稿',
                'created_at' => '2021-3-1 18:35:48',
                'updated_at' => '2021-3-1 18:35:48',
            ],
            [
                'id' => '2',
                'user_id' => '1',
                'posts' => 'aaaの2回目の投稿',
                'created_at' => '2021-5-10 15:57:21',
                'updated_at' => '2021-5-10 15:57:21',

            ],
            [
                'id' => '3',
                'user_id' => '2',
                'posts' => 'bbbの1回目の投稿',
                'created_at' => '2021-7-20 10:19:34',
                'updated_at' => '2021-7-20 10:19:34',

            ],
            ]);
        //
    }
}
