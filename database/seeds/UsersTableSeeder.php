<?php

use Illuminate\Database\Seeder;
use \App\Domain\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = new User;

        $User->create([
            'name' => 'Greed',
            'email' => 'admin@demo.com',
            'password' => bcrypt('admin'),
            'api_token' => str_random(60)
        ]);
    }
}