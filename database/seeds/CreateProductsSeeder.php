<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        Product::create([
            'product_name' => '',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => '',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);

        Product::create([
            'product_name' => '',
            'price' => 0,
            'product_img' => '',
            'user_id' => 'test',
        ]);
    }
}
