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

        // 管理者
        User::create([
            'user_id' => 'admin',
            'username' => 'admin',
            'sex' => 'man',
            'address' => 'hogehogeunko',
            'age' => 6,
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'charge' => 0,
            'type' => 'admin'
        ]);

        // 企業
        User::create([
            'user_id' => 'seller',
            'username' => 'seller',
            'sex' => 'man',
            'address' => 'hogehogeunko',
            'age' => 6,
            'email' => 'seller@seller.com',
            'password' => Hash::make('password'),
            'charge' => 0,
            'type' => 'seller'
        ]);

        // 顧客
        User::create([
            'user_id' => 'customer',
            'username' => 'customer',
            'sex' => 'man',
            'address' => 'hogehogeunko',
            'age' => 6,
            'email' => 'customer@customer.com',
            'password' => Hash::make('password'),
            'charge' => 0,
            'type' => 'customer'
        ]);
    }
}
