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
        

        $users = array(
            array(

                'username' => 'shafi',
                'password' => Hash::make('1234'),
                'email' => 'malik@shafi.com',
            )
            );

            DB::table('users')->insert($users);
    }
}
