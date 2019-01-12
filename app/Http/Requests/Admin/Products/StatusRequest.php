<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 商品系 > 強制ステータス変更
 *
 * Class StatusRequest
 * @package App\Http\Requests\Admin\Products
 */
class StatusRequest extends FormRequest
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
            'product_id' => [ 'required', 'numeric', ],
            'status' => [ 'required', 'numeric', ],
        ];
    }
}
