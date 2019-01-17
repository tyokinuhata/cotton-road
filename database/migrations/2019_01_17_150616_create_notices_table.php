<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 通知テーブル
 *
 * Class CreateNoticesTable
 */
class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('タイトル');
            $table->text('message')->comment('説明');
            $table->unsignedInteger('from_user_id')->comment('送信者');
            $table->unsignedInteger('to_user_id')->comment('受信者');
            $table->unsignedInteger('product_id')->nullable()->comment('商品ID');
            $table->unsignedInteger('cardboard_id')->nullable()->comment('ダンボールID');
            $table->boolean('is_read')->default(false)->comment('既読かどうか');
            $table->timestamps();

            $table->foreign('from_user_id')->references('id')->on('users');
            $table->foreign('to_user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('cardboard_id')->references('id')->on('cardboard_sending_Waits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
