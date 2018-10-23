<?php

/**
 * 売上詳細テーブル
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_details', function (Blueprint $table) {
            $table->increments('sale_detail_id')->comment('売上詳細ID');
            $table->unsignedInteger('sale_id')->comment('売上ID');
            $table->timestamps();

            $table->foreign('sale_id')->references('sale_id')->on('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_details');
    }
}
