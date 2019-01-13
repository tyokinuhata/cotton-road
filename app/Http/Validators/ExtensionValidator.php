<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;
use App\Models\User;
use App\Models\Product;
use Hash;
use Auth;

/**
 * バリデーションの拡張を行う
 *
 * Class ExtensionValidator
 * @package App\Http\Validators
 */
class ExtensionValidator extends Validator
{
    /**
     * フォームから送信された現在のパスワードとDBに格納されているパスワードが等しいかどうかの検証を行う
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return mixed
     */
    public function validatePasswordCheck($attribute, $value, $parameters)
    {
        $user_id = $this->getValue('user_id');
        $password = User::where('user_id', $user_id)->first()->password;
        return Hash::check($value, $password);
    }

    /**
     * フォームから送信された商品IDが在庫を追加できる状態にあるかの検証を行う
     * - 存在する商品である
     * - 商品ステータスが在庫(stock)である
     * - 追加在庫ステータスが初期状態(initial)である
     * - ログインユーザが追加した商品である
     * - 追加在庫数が0である
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function validateStockAdditionsStatusCheck($attribute, $value, $parameters)
    {
        $type = $this->getValue('type');

        if ($type == 1) {
            $product = Product::where('id', $value)
                ->where('product_status_id', 3)
                ->where('stock_addition_status_id', 1)
                ->where('user_id', Auth::id())
                ->where('stock_additions', 0)
                ->first();

            if (!empty($product))  return true;
            return false;
        }
        return true;
    }
}