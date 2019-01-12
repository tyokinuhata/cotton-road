<?php

use Illuminate\Database\Seeder;
use App\Models\StockAdditionStatus;

/**
 * 在庫追加分ステータスのシーダー
 *
 * Class CreateStockAdditionStatusesSeeder
 */
class CreateStockAdditionStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StockAdditionStatus::truncate();

        // 1
        StockAdditionStatus::create([
            'name' => '未承認',
            'en_name' => 'unapproved',
        ]);

        // 2
        StockAdditionStatus::create([
            'name' => 'コンテナ待ち',
            'en_name' => 'wait_container',
        ]);

        // 3
        StockAdditionStatus::create([
            'name' => '在庫',
            'en_name' => 'stock',
        ]);

        // 4
        StockAdditionStatus::create([
            'name' => '返送待ち',
            'en_name' => 'wait_return',
        ]);

        // 5
        StockAdditionStatus::create([
            'name' => '返送後',
            'en_name' => 'return',
        ]);

        // 6
        StockAdditionStatus::create([
            'name' => '廃棄待ち',
            'en_name' => 'wait_disposal',
        ]);

        // 7
        StockAdditionStatus::create([
            'name' => '廃棄後',
            'en_name' => 'disposal',
        ]);
    }
}
