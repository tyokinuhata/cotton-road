<?php

use Illuminate\Database\Seeder;
use App\Models\ProductStatus;

class CreateProductStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductStatus::truncate();

        // 1
        ProductStatus::create([
            'name' => '承認待ち',
        ]);

        // 2
        ProductStatus::create([
            'name' => 'コンテナ待ち',
        ]);

        // 3
        ProductStatus::create([
            'name' => '在庫',
        ]);

        // 4
        ProductStatus::create([
            'name' => '返送待ち',
        ]);

        // 5
        ProductStatus::create([
            'name' => '返送後',
        ]);

        // 6
        ProductStatus::create([
            'name' => '廃棄待ち',
        ]);

        // 7
        ProductStatus::create([
            'name' => '廃棄後',
        ]);
    }
}
