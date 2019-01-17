<?php

namespace App\Http\Requests\Seller\Info\Product;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 通知系 > 商品廃棄待ち要求
 *
 * Class WaitDisposalRequest
 * @package App\Http\Requests\Seller\Info\Product
 */
class WaitDisposalRequest extends FormRequest
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
