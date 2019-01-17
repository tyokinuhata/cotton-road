<?php

namespace App\Http\Requests\Seller\Info;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 通知系 > 返送待ち
 *
 * Class SellRequest
 * @package App\Http\Requests\Seller\Products
 */
class WaitBackRequest extends FormRequest
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
            'notice_id' => [ 'required', 'numeric', ],
            'product_id' => [ 'required', 'numeric', ],
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
        ];
    }
}
