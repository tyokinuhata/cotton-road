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
            'user_name_kana' => 'テスト',
            'sex' => false,
            'address_1' => 'test',
            'address_2' => 'test',
            'age' => 6,
            'mail_address' => 'test@test.com',
            'password' => 'testtest',
            'charge' => 1000,
            'type' => 'admin'
        ]);
    }
}
