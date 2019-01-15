<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 在庫追加分ステータスログテーブル
 *
 * Class CreateStockAdditionStatusLogsTable
 */
class CreateStockAdditionStatusLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_addition_status_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stock_addition_status_id')->comment('在庫追加分のステータスID');
            $table->unsignedInteger('product_id')->comment('商品ID');
            $table->unsignedInteger('user_id')->comment('ユーザID');
            $table->timestamps();

            $table->foreign('stock_addition_status_id')->references('id')->on('stock_addition_statuses');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_addition_status_logs');
    }
}
