<?php

/**
 * 会員テーブル
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id')->comment('ユーザID');
            $table->string('user_name')->comment('ユーザ名');
            $table->string('user_name_kana')->comment('ユーザ名(カナ)');
            $table->boolean('sex')->comment('性別');
            $table->text('address_1')->comment('住所１');
            $table->text('address_2')->nullable()->comment('住所２');
            $table->unsignedInteger('age')->comment('年齢');
            $table->string('mail_address')->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->unsignedInteger('charge')->comment('プリペイド残高');
            $table->string('type')->comment('ユーザ種別');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
