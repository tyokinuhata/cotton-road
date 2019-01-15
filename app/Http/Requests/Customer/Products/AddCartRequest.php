<?php

namespace App\Http\Requests\Customer\Products;

use Illuminate\Foundation\Http\FormRequest;

class AddCartRequest extends FormRequest
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
            'amount' => [ 'required', 'digits_between:1,10', ],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'amount.required' => '数量は必須項目です。',
            'amount.digits_between' => '一度に指定できる数量は10個までです。',
        ];
    }
}
