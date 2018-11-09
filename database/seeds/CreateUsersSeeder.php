<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'user_id' => 'test',
            'user_name' => 'test',
            'sex' => false,
            'address' => 'test',
            'age' => 6,
            'mail_address' => 'test@test.com',
            'password' => 'testtest',
            'charge' => 1000,
            'type' => 'admin'
        ]);
    }
}
