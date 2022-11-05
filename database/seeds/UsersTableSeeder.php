<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([
            [
                'id' => '1',
                'username' => 'aaa',
                'mail' => 'aaa@a.a.a',
                'password' => 'aaaaaa',
                'created_at' => '2022-3-13 14:32:47',
                'updated_at' => '2022-3-13 14:32:47',
            ],
            [
                'id' => '2',
                'username' => 'bbb',
                'mail' => 'bbb@b.b.b',
                'password' => 'bbbbb',
                'created_at' => '2022-3-14 14:32:47',
                'updated_at' => '2022-3-14 14:32:47',
            ],
            [
                'id' => '3',
                'username' => 'ccc',
                'mail' => 'ccc@c.c.c',
                'password' => 'ccccc',
                'created_at' => '2022-3-15 14:32:47',
                'updated_at' => '2022-3-15 14:32:47',
            ],
            ]);
        //
    }
}
