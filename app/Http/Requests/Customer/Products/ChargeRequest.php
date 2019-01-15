<?php

namespace App\Http\Requests\Customer\Products;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 商品系 > チャージ
 *
 * Class ChargeRequest
 * @package App\Http\Requests\Customer\Products
 */
class ChargeRequest extends FormRequest
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
            'prepaid_number' => [ 'required', 'alpha_num', 'size:10', 'prepaid_check', ],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'prepaid_number.required' => 'プリペイド番号は必須項目です。',
            'prepaid_number.string' => 'プリペイド番号は文字列で指定してください。',
            'prepaid_number.alpha_num' => 'プリペイド番号は半角英数字で指定してください。',
            'prepaid_number.size' => 'プリペイド番号は10桁で指定してください。',
            'prepaid_number.prepaid_check' => '有効なプリペイド番号を指定してください。',
        ];
    }
}
