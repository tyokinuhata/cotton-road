<?php

namespace App\Http\Requests\Seller\Delivery;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 納品系 > 商品登録
 *
 * Class SellRequest
 * @package App\Http\Requests\Seller\Products
 */
class StockRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => [ 'required', 'numeric', 'in:1,2', ],
            'product_id' => [ 'required', 'numeric', 'stock_additions_status_check', ],
            'stock_number' => [ 'required', 'numeric', 'digits_between:1,1000', ],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'required' => '必須項目です。',
            'numeric' => '数値で入力してください。',
            'type.in' => '予期しない値です。',
            'product_id.stock_additions_status_check' => 'その商品は在庫を追加できない状態にあります。',
            'stock_number.digits_between' => '1 ~ 1000の間で入力してください。',
        ];
    }
}
