<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 商品ステータステーブル
 *
 * Class CreateProductStatusesTable
 */
class CreateProductStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_statuses', function (Blueprint $table) {
            $table->increments('id')->comment('ステータスID');
            $table->string('name')->comment('ステータス名');
            $table->string('en_name')->comment('英名');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_statuses');
    }
}
