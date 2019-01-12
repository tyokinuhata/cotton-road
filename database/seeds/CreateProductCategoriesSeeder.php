<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

/**
 * 商品カテゴリのシーダー
 *
 * Class CreateProductCategoriesSeeder
 */
class CreateProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::truncate();

        // 1
        ProductCategory::create([
            'name' => '錠剤',
            'en_name' => 'tablet',
        ]);

        // 2
        ProductCategory::create([
            'name' => 'カプセル剤',
            'en_name' => 'capsule',
        ]);

        // 3
        ProductCategory::create([
            'name' => '散剤',
            'en_name' => 'powder',
        ]);

        // 4
        ProductCategory::create([
            'name' => '液剤',
            'en_name' => 'liquid',
        ]);

        // 5
        ProductCategory::create([
            'name' => '吸入剤',
            'en_name' => 'inhalant',
        ]);

        // 6
        ProductCategory::create([
            'name' => '噴霧剤',
            'en_name' => 'spray',
        ]);

        // 7
        ProductCategory::create([
            'name' => 'トローチ',
            'en_name' => 'lozenge',
        ]);

        // 8
        ProductCategory::create([
            'name' => '医療用品',
            'en_name' => 'medical_supplies',
        ]);

        // 9
        ProductCategory::create([
            'name' => '医療機器',
            'en_name' => 'medical_device',
        ]);

        // 10
        ProductCategory::create([
            'name' => '日用品',
            'en_name' => 'commodity',
        ]);

        // 11
        ProductCategory::create([
            'name' => 'その他',
            'en_name' => 'other',
        ]);
    }
}
