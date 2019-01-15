<?php

namespace App\Http\Requests\Customer\Products\Cart;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 商品系 > カート > カートから削除
 *
 * Class AddCartRequest
 * @package App\Http\Requests\Customer\Products
 */
class DeleteRequest extends FormRequest
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
            'cart_id' => ['required', 'numeric', ],
        ];
    }
}
