<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('product_id')->comment('商品ID');
            $table->string('product_name')->comment('商品名');
            $table->unsignedInteger('price')->comment('単価');
            $table->string('product_img')->comment('商品画像');
            $table->text('description')->comment('説明');
            $table->string('category')->comment('カテゴリ');
            $table->string('user_id')->comment('ユーザID');
            $table->unsignedInteger('category_id')->comment('カテゴリID');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('category_id')->references('category_id')->on('product_categories');
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
