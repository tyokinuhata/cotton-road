<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;
use App\Models\User;
use App\Models\Product;
use App\Models\Prepaid;
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
     * フォームから送信された現在のパスワードとDBに格納されているパスワードが等しいかどうかのチェック
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
     * プリペイド番号が存在するかどうかのチェック
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return mixed
     */
    public function validatePrepaidCheck($attribute, $value, $parameters)
    {
        return Prepaid::where('prepaid_number', $value)->where('is_valid', true)->exists();
    }

    /**
     * カートに入れる商品数が在庫数を超えていないかのチェック
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function validateCartAmountCheck($attribute, $value, $parameters)
    {
        $product_id = $this->getValue('product_id');

        $stock_number = Product::where('id', $product_id)->first()->stock_number;

        if ($stock_number < $value) return false;
        return true;
    }
}