<?php

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('follows')->insert([
                [
                    'id' => '1',
                    'follow' => '2',
                    'follower' => '1',
                    'created_at' => '2022-5-19 16:37:29',
                ],
                [
                    'id' => '2',
                    'follow' => '3',
                    'follower' => '1',
                    'created_at' => '2022-5-19 20:54:34',
                ],
                [
                    'id' => '3',
                    'follow' => '1',
                    'follower' => '2',
                    'created_at' => '2022-5-19 21:31:11',
                ],
                ]);
        //
        }
    }
}