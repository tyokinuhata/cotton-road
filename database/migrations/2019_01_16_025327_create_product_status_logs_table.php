<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 商品ステータスログテーブル
 *
 * Class CreateProductStatusLogsTable
 */
class CreateProductStatusLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_status_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_status_id')->comment('商品ステータスID');
            $table->unsignedInteger('product_id')->comment('商品ID');
            $table->unsignedInteger('user_id')->comment('ユーザID');
            $table->timestamps();

            $table->foreign('product_status_id')->references('id')->on('product_statuses');
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
        Schema::dropIfExists('product_status_logs');
    }
}
