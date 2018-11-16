<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

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

        ProductCategory::create([
            'category_name' => '錠剤'
        ]);

        ProductCategory::create([
            'category_name' => 'カプセル剤'
        ]);

        ProductCategory::create([
            'category_name' => '散剤'
        ]);

        ProductCategory::create([
            'category_name' => '液剤'
        ]);

        ProductCategory::create([
            'category_name' => '吸入剤'
        ]);

        ProductCategory::create([
            'category_name' => '噴霧剤'
        ]);

        ProductCategory::create([
            'category_name' => 'トローチ'
        ]);

        ProductCategory::create([
            'category_name' => '医療用品'
        ]);

        ProductCategory::create([
            'category_name' => '医療機器'
        ]);

        ProductCategory::create([
            'category_name' => '日用品'
        ]);

        ProductCategory::create([
            'category_name' => 'その他'
        ]);
    }
}
