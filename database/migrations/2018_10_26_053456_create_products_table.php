<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 商品テーブル
 *
 * Class CreateProductsTable
 */
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->comment('商品ID');
            $table->string('name')->comment('商品名');
            $table->unsignedInteger('price')->comment('価格');
            $table->unsignedInteger('stock_number')->comment('在庫数');
            $table->unsignedInteger('safety_stock_number')->comment('安全在庫数');
            $table->unsignedInteger('stock_additions')->default(0)->comment('在庫追加分');
            $table->string('img')->default('/storage/images/products/no_image.png')->comment('商品画像');
            $table->text('description')->comment('説明');
            $table->string('user_id')->comment('ユーザID');
            $table->unsignedInteger('product_category_id')->comment('カテゴリID');
            $table->unsignedInteger('product_status_id')->comment('ステータスID');
            $table->unsignedInteger('stock_addition_status_id')->default(1)->comment('在庫追加分ステータスID');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_category_id')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
