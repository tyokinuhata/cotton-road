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
            'product_id' => [ 'required', 'numeric', ],
            'stock_number' => [ 'required', 'numeric', 'digits_between:1,1000', ],
        ];
    }
}
