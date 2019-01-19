<?php

use Illuminate\Database\Seeder;
use App\Models\Prepaid;

/**
 * プリペイドのシーダー
 *
 * Class CreatePrepaidsSeeder
 */
class CreatePrepaidsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prepaid::truncate();

        Prepaid::create([
            'prepaid_number' => uniqid(),
            'value' => 1000,
            'is_valid' => true,
        ]);

        Prepaid::create([
            'prepaid_number' => uniqid(),
            'value' => 2000,
            'is_valid' => true,
        ]);

        Prepaid::create([
            'prepaid_number' => uniqid(),
            'value' => 5000,
            'is_valid' => true,
        ]);

        Prepaid::create([
            'prepaid_number' => uniqid(),
            'value' => 10000,
            'is_valid' => true,
        ]);
    }
}
